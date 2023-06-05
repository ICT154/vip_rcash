<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_vip extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        ini_set('max_execution_time', 300); // 5 minutes
    }


    function get_list_name($tipe, $id)
    {
        if ($tipe == "prepaid") {
            $this->db->order_by('price_basic', 'asc');
            $this->db->where('status', "available");
            $this->db->like('brand', $id, 'both');
            return $this->db->get('t_prepaid')->result();
        } else if ($tipe == "game") {
            $this->db->order_by('basic_price', 'asc');
            $this->db->where('status', "available");
            $this->db->like('game', $id, 'both');
            return $this->db->get('t_game')->result();
        } else if ($tipe == "sosmed") {
            $this->db->order_by('basic_price', 'asc');
            $this->db->where('status', "available");
            $this->db->like('category', $id, 'both');
            return $this->db->get('t_sosmed')->result();
        } else {
            return false;
        }
    }


    function get_list($tipe)
    {
        if ($tipe == "prepaid") {
            $this->db->distinct('brand');
            $this->db->select("brand");
            $this->db->order_by('brand', 'asc');
            $this->db->where('status', "available");
            return $this->db->get('t_prepaid')->result();
        } else if ($tipe == "game") {
            $this->db->distinct('game');
            $this->db->select("game");
            $this->db->where('status', "available");
            return $this->db->get('t_game')->result();
        } else if ($tipe == "sosmed") {
            $this->db->distinct('category');
            $this->db->select("category");
            $this->db->where('status', "available");
            $this->db->order_by('category', 'asc');
            return $this->db->get('t_sosmed')->result();
        } else {
            return false;
        }
    }


    function insert_prepaid($data)
    {

        foreach ($data->data as $item) {
            // membuat array untuk dimasukkan ke database
            $this->db->where('code', $item->code);
            $cek = $this->db->get('t_prepaid', 1);
            if ($cek->num_rows() > 0) {
                $update_data = array(
                    'brand' => $item->brand,
                    // 'code' => $item->code,
                    'name' => $item->name,
                    'note' => $item->note,
                    'price_basic' => $item->price->basic + ($item->price->basic * 0.15),
                    'price_premium' => $item->price->premium + ($item->price->basic * 0.10),
                    'price_special' => $item->price->special + ($item->price->basic * 0.05),
                    'status' => $item->status,
                    'multi_trx' => $item->multi_trx,
                    'maintenance' => $item->maintenace,
                    'category' => $item->category,
                    'prepost' => $item->prepost,
                    'type' => $item->type
                );

                // memasukkan data ke database
                $this->db->where('code', $item->code);
                $this->db->update('t_prepaid', $update_data);
            } else {
                $insert_data = array(
                    'brand' => $item->brand,
                    'code' => $item->code,
                    'name' => $item->name,
                    'note' => $item->note,
                    'price_basic' => $item->price->basic + ($item->price->basic * 0.15),
                    'price_premium' => $item->price->premium + ($item->price->basic * 0.10),
                    'price_special' => $item->price->special + ($item->price->basic * 0.05),
                    'status' => $item->status,
                    'multi_trx' => $item->multi_trx,
                    'maintenance' => $item->maintenace,
                    'category' => $item->category,
                    'prepost' => $item->prepost,
                    'type' => $item->type
                );

                // memasukkan data ke database
                $this->db->insert('t_prepaid', $insert_data);
            }
        }
        $this->send_truncate($data);
    }


    function send_truncate($data)
    {
        $this->db->truncate('t_prepaid_temp');
        foreach ($data->data as $item) {
            // membuat array untuk dimasukkan ke database
            $insert_data = array(
                'brand' => $item->brand,
                'code' => $item->code,
                'name' => $item->name,
                'note' => $item->note,
                'price_basic' => $item->price->basic + ($item->price->basic * 0.15),
                'price_premium' => $item->price->premium + ($item->price->basic * 0.10),
                'price_special' => $item->price->special + ($item->price->basic * 0.05),
                'status' => $item->status,
                'multi_trx' => $item->multi_trx,
                'maintenance' => $item->maintenace,
                'category' => $item->category,
                'prepost' => $item->prepost,
                'type' => $item->type
            );

            // memasukkan data ke database
            $this->db->insert('t_prepaid_temp', $insert_data);
        }
        $this->db->select("code");
        $data_server_utama = $this->db->get('t_prepaid')->result();
        foreach ($data_server_utama as $key) {
            $this->db->where('code', $key->code);
            $cek_data = $this->db->get('t_prepaid_temp', 1);
            if ($cek_data->num_rows() > 0) {
            } else {
                $this->db->where('code', $key->code);
                $this->db->delete('t_prepaid');
                if ($this->db->affected_rows() > 0) {
                    echo "SUKSES DELETE TO DATABASE <br>";
                } else {
                    echo "FAIL DELETE TO DATABASE <br>";
                }
            }
        }
    }


    public function insert_sosmed($data)
    {
        foreach ($data->data as $item) {
            // membuat array untuk dimasukkan ke database
            $this->db->where('product_id_api', $item->id);
            $cek = $this->db->get('socialmedia', 1);
            if ($cek->num_rows() > 0) {
                try {
                    $update_data = array(
                        'product_id_api' => $item->id,
                        'product_name' => $item->name,
                        'category' => $item->category,
                        'status' => $item->status,
                        'note' => $item->note,
                        'min_quantity' => $item->min,
                        'max_quantity' => $item->max,
                        'basic_price' => $item->price->basic + ($item->price->basic * 0.08),
                        'premium_price' => $item->price->basic + ($item->price->basic * 0.05),
                        'special_price' => $item->price->basic + ($item->price->basic * 0.02),
                        'real_price' => $item->price->basic,
                        'provider' => "VIPRESELLER",
                        'link_api' => "https://vip-reseller.co.id/api/social-media",
                        'date_registered' => date("Y-m-d H:i:s"),
                    );

                    // memasukkan data ke database
                    $this->db->where('product_id_api', $item->id);
                    $this->db->update('socialmedia', $update_data);
                } catch (Exception $th) {
                    $this->M_log->log_in("Gagal Mengupdate Layanan Sosmed - Error Sistem $th", "Gagal", "service_sosmed");
                }
            } else {
                try {
                    $insert_data = array(
                        "product_id" => $this->GZL->gen_code("5", "RSM"),
                        'product_id_api' => $item->id,
                        'product_name' => $item->name,
                        'category' => $item->category,
                        'status' => $item->status,
                        'note' => $item->note,
                        'min_quantity' => $item->min,
                        'max_quantity' => $item->max,
                        'basic_price' => $item->price->basic + ($item->price->basic * 0.08),
                        'premium_price' => $item->price->basic + ($item->price->basic * 0.05),
                        'special_price' => $item->price->basic + ($item->price->basic * 0.02),
                        'real_price' => $item->price->basic,
                        'provider' => "VIPRESELLER",
                        'link_api' => "https://vip-reseller.co.id/api/social-media",
                        'date_registered' => date("Y-m-d H:i:s")
                    );

                    // memasukkan data ke database
                    $this->db->insert('socialmedia', $insert_data);
                } catch (Exception $th) {
                    $this->M_log->log_in("Gagal Memasukan Layanan Sosmed - Error Sistem $th", "Gagal", "service_sosmed");
                }
            }

            try {
                $price_history = array(
                    'entity_type' => "socialmedia",
                    'product_id' => $item->id,
                    'price_type' => "",
                    'price' => $item->price->basic,
                    'change_date' => date("Y-m-d H:i:s"),
                    'basic_price' => $item->price->basic + ($item->price->basic * 0.08),
                    'premium_price' => $item->price->basic + ($item->price->basic * 0.05),
                    'special_price' => $item->price->basic + ($item->price->basic * 0.02),
                );
                $this->db->insert('pricehistory', $price_history);
            } catch (Exception $th) {
                $this->M_log->log_in("Gagal Memasukan Riwayat Harga - Error Sistem $th", "Gagal", "service_sosmed");
            }
        }
        $this->send_truncate_sosmed($data);
    }


    function send_truncate_sosmed($data)
    {
        $this->db->truncate('socialmediatemp');
        foreach ($data->data as $item) {
            try {
                $insert_data = array(
                    "product_id" => $this->GZL->gen_code("5", "RSM"),
                    'product_id_api' => $item->id,
                    'product_name' => $item->name,
                    'category' => $item->category,
                    'status' => $item->status,
                    'note' => $item->note,
                    'min_quantity' => $item->min,
                    'max_quantity' => $item->max,
                    'basic_price' => $item->price->basic + ($item->price->basic * 0.08),
                    'premium_price' => $item->price->basic + ($item->price->basic * 0.05),
                    'special_price' => $item->price->basic + ($item->price->basic * 0.02),
                    'real_price' => $item->price->basic,
                    'provider' => "VIPRESELLER",
                    'link_api' => "https://vip-reseller.co.id/api/social-media",
                    'date_registered' => date("Y-m-d H:i:s")
                );
                $this->db->insert('socialmediatemp', $insert_data);
            } catch (Exception $th) {
                $this->M_log->log_in("Gagal Memasukan Layanan Sosmed - Error Sistem $th", "Gagal", "service_sosmed");
            }
        }
        $this->db->select("product_id_api");
        $data_server_utama = $this->db->get('socialmedia')->result();
        foreach ($data_server_utama as $key) {
            $this->db->where('product_id_api', $key->product_id_api);
            $cek_data = $this->db->get('socialmediatemp', 1);
            if ($cek_data->num_rows() > 0) {
            } else {
                try {
                    $this->db->where('product_id_api', $key->product_id_api);
                    $this->db->delete('socialmedia');
                    if ($this->db->affected_rows() > 0) {
                        echo "SUKSES DELETE TO DATABASE <br>";
                    } else {
                        echo "FAIL DELETE TO DATABASE <br>";
                    }
                } catch (Exception $th) {
                    $this->M_log->log_in("Gagal Menghapus Layanan Sosmed - Error Sistem $th", "Gagal", "service_sosmed");
                }
            }
        }
    }


    public function insert_game($data)
    {
        foreach ($data->data as $item) {
            // membuat array untuk dimasukkan ke database
            $this->db->where('game_id_api', $item->code);
            $cek = $this->db->get('game', 1);
            if ($cek->num_rows() > 0) {
                try {
                    $update_data = array(
                        // 'game_id' => $this->GZL->gen_code("5", "RGM"),
                        'game_id_api' => $item->code,
                        'game_name' => $item->name,
                        'code' => $item->code,  'price' => $item->price->basic,
                        'basic_price' => $item->price->basic + ($item->price->basic * 0.05),
                        'premium_price' => $item->price->basic + ($item->price->basic * 0.03),
                        'special_price' => $item->price->basic + ($item->price->basic * 0.02),
                        'server' => $item->server,
                        'status' => $item->status,
                        'date_registered' => date("Y-m-d H:i:s")
                    );

                    $this->db->where('game_id_api', $item->code);
                    $this->db->update('game', $update_data);
                } catch (\Throwable $th) {
                    $this->M_log->log_in("Gagal Mengupdate Layanan Game - Error Sistem $th", "Gagal", "service_game");
                }
            } else {
                $insert_data = array(
                    'game_id' => $this->GZL->gen_code("5", "RGM"),
                    'game_id_api' => $item->code,
                    'game_name' => $item->name,  'price' => $item->price->basic,
                    'code' => $item->code,
                    'basic_price' => $item->price->basic + ($item->price->basic * 0.05),
                    'premium_price' => $item->price->basic + ($item->price->basic * 0.03),
                    'special_price' => $item->price->basic + ($item->price->basic * 0.02),
                    'server' => $item->server,
                    'status' => $item->status,
                    'date_registered' => date("Y-m-d H:i:s")
                );

                // memasukkan data ke database
                try {
                    $this->db->insert('game', $insert_data);
                } catch (Exception $th) {
                    $this->M_log->log_in("Gagal Memasukan Layanan Game - Error Sistem $th", "Gagal", "service_game");
                }
            }
        }
        $this->send_truncate_game($data);
    }

    function send_truncate_game($data)
    {
        $this->db->truncate('gametemp');
        foreach ($data->data as $item) {
            // membuat array untuk dimasukkan ke database
            $insert_data = array(
                'game_id' => $this->GZL->gen_code("5", "RGM"),
                'game_id_api' => $item->code,
                'game_name' => $item->name,
                'code' => $item->code,
                'price' => $item->price->basic,
                'basic_price' => $item->price->basic + ($item->price->basic * 0.05),
                'premium_price' => $item->price->basic + ($item->price->basic * 0.03),
                'special_price' => $item->price->basic + ($item->price->basic * 0.02),
                'server' => $item->server,
                'status' => $item->status,
                'date_registered' => date("Y-m-d H:i:s")
            );

            // memasukkan data ke database
            $this->db->insert('gametemp', $insert_data);
        }
        $this->db->select("game_id_api");
        $data_server_utama = $this->db->get('game')->result();
        foreach ($data_server_utama as $key) {
            $this->db->where('game_id_api', $key->game_id_api);
            $cek_data = $this->db->get('gametemp', 1);
            if ($cek_data->num_rows() > 0) {
            } else {
                $this->db->where('game_id_api', $key->game_id_api);
                $this->db->delete('game');
                if ($this->db->affected_rows() > 0) {
                    echo "SUKSES DELETE TO DATABASE <br>";
                } else {
                    echo "FAIL DELETE TO DATABASE <br>";
                }
            }
        }
    }
}

/* End of file M_vip.php */
