<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_vip extends CI_Model
{

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
            $this->db->where('id', $item->id);
            $cek = $this->db->get('t_sosmed', 1);
            if ($cek->num_rows() > 0) {
                $update_data = array(
                    'id' => $item->id,
                    'name' => $item->name,
                    'category' => $item->category,
                    'status' => $item->status,
                    'note' => $item->note,
                    'min' => $item->min,
                    'max' => $item->max,
                    'speed' => $item->note,
                    'basic_price' => $item->price->basic + ($item->price->basic * 0.15),
                    'premium_price' => $item->price->premium + ($item->price->basic * 0.10),
                    'special_price' => $item->price->special + ($item->price->basic * 0.05)
                );

                // memasukkan data ke database
                $this->db->where('id', $item->id);
                $this->db->update('t_sosmed', $update_data);
            } else {
                $insert_data = array(
                    'id' => $item->id,
                    'name' => $item->name,
                    'category' => $item->category,
                    'status' => $item->status,
                    'note' => $item->note,
                    'min' => $item->min,
                    'max' => $item->max,
                    'speed' => $item->note,
                    'basic_price' => $item->price->basic + ($item->price->basic * 0.15),
                    'premium_price' => $item->price->premium + ($item->price->basic * 0.10),
                    'special_price' => $item->price->special + ($item->price->basic * 0.05)
                );

                // memasukkan data ke database
                $this->db->insert('t_sosmed', $insert_data);
            }
        }
        $this->send_truncate_sosmed($data);
    }


    function send_truncate_sosmed($data)
    {
        $this->db->truncate('t_sosmed_temp');
        foreach ($data->data as $item) {
            // membuat array untuk dimasukkan ke database
            $insert_data = array(
                'id' => $item->id,
                'name' => $item->name,
                'category' => $item->category,
                'status' => $item->status,
                'note' => $item->note,
                'min' => $item->min,
                'max' => $item->max,
                'speed' => $item->note,
                'basic_price' => $item->price->basic + ($item->price->basic * 0.15),
                'premium_price' => $item->price->premium + ($item->price->basic * 0.10),
                'special_price' => $item->price->special + ($item->price->basic * 0.05)
            );

            // memasukkan data ke database
            $this->db->insert('t_sosmed_temp', $insert_data);
        }
        $this->db->select("id");
        $data_server_utama = $this->db->get('t_sosmed')->result();
        foreach ($data_server_utama as $key) {
            $this->db->where('id', $key->id);
            $cek_data = $this->db->get('t_sosmed_temp', 1);
            if ($cek_data->num_rows() > 0) {
            } else {
                $this->db->where('id', $key->code);
                $this->db->delete('t_sosmed');
                if ($this->db->affected_rows() > 0) {
                    echo "SUKSES DELETE TO DATABASE <br>";
                } else {
                    echo "FAIL DELETE TO DATABASE <br>";
                }
            }
        }
    }


    public function insert_game($data)
    {
        foreach ($data->data as $item) {
            // membuat array untuk dimasukkan ke database
            $this->db->where('code', $item->code);
            $cek = $this->db->get('t_game', 1);
            if ($cek->num_rows() > 0) {
                $update_data = array(
                    'code' => $item->code,
                    'game' => $item->game,
                    'name' => $item->name,
                    'basic_price' => $item->price->basic + ($item->price->basic * 0.15),
                    'premium_price' => $item->price->premium + ($item->price->basic * 0.10),
                    'special_price' => $item->price->special + ($item->price->basic * 0.05),
                    'server' => $item->server,
                    'status' => $item->status
                );

                // memasukkan data ke database
                $this->db->where('code', $item->code);
                $this->db->update('t_game', $update_data);
            } else {
                $insert_data = array(
                    'code' => $item->code,
                    'game' => $item->game,
                    'name' => $item->name,
                    'basic_price' => $item->price->basic + ($item->price->basic * 0.15),
                    'premium_price' => $item->price->premium + ($item->price->basic * 0.10),
                    'special_price' => $item->price->special + ($item->price->basic * 0.05),
                    'server' => $item->server,
                    'status' => $item->status
                );

                // memasukkan data ke database
                $this->db->insert('t_game', $insert_data);
            }
        }
        $this->send_truncate_game($data);
    }

    function send_truncate_game($data)
    {
        $this->db->truncate('t_game_temp');
        foreach ($data->data as $item) {
            // membuat array untuk dimasukkan ke database
            $insert_data = array(
                'code' => $item->code,
                'game' => $item->game,
                'name' => $item->name,
                'basic_price' => $item->price->basic + ($item->price->basic * 0.15),
                'premium_price' => $item->price->premium + ($item->price->basic * 0.10),
                'special_price' => $item->price->special + ($item->price->basic * 0.05),
                'server' => $item->server,
                'status' => $item->status
            );

            // memasukkan data ke database
            $this->db->insert('t_game_temp', $insert_data);
        }
        $this->db->select("code");
        $data_server_utama = $this->db->get('t_game')->result();
        foreach ($data_server_utama as $key) {
            $this->db->where('code', $key->code);
            $cek_data = $this->db->get('t_game_temp', 1);
            if ($cek_data->num_rows() > 0) {
            } else {
                $this->db->where('code', $key->code);
                $this->db->delete('t_game');
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
