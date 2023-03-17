<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_vip extends CI_Model
{

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
                    'price_basic' => $item->price->basic,
                    'price_premium' => $item->price->premium,
                    'price_special' => $item->price->special,
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
                    'price_basic' => $item->price->basic,
                    'price_premium' => $item->price->premium,
                    'price_special' => $item->price->special,
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
                'price_basic' => $item->price->basic,
                'price_premium' => $item->price->premium,
                'price_special' => $item->price->special,
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
                    'basic_price' => $item->price->basic,
                    'premium_price' => $item->price->premium,
                    'special_price' => $item->price->special
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
                    'basic_price' => $item->price->basic,
                    'premium_price' => $item->price->premium,
                    'special_price' => $item->price->special
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
                'basic_price' => $item->price->basic,
                'premium_price' => $item->price->premium,
                'special_price' => $item->price->special
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
                    'basic_price' => $item->price->basic,
                    'premium_price' => $item->price->premium,
                    'special_price' => $item->price->special,
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
                    'basic_price' => $item->price->basic,
                    'premium_price' => $item->price->premium,
                    'special_price' => $item->price->special,
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
                'basic_price' => $item->price->basic,
                'premium_price' => $item->price->premium,
                'special_price' => $item->price->special,
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
