<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_Medan extends CI_Model
{
    function add_layanan($data)
    {

        $data = json_decode($data); // $json_data adalah string JSON yang berisi objek tersebut
        $data_to_insert = array(); // inisialisasi array kosong untuk menampung data yang akan diinsert

        foreach ($data->data as $obj) {
            $data_to_insert[] = array(
                'id' => $obj->id,
                'category' => $obj->category,
                'name' => $obj->name,
                'price' => $obj->price,
                'price_sell' => $obj->price + ($obj->price * 0.15),
                'min' => $obj->min,
                'max' => $obj->max,
                'description' => $obj->description,
                'type' => $obj->type,
                'refill' => $obj->refill,
                'masa_refill' => $obj->masa_refill,
                'average_time' => $obj->average_time,
                'date_g' => date("Y-m-d H:i:s")
            );
        }
        $this->db->truncate('t_sosmed_v2');
        $this->db->insert_batch('t_sosmed_v2', $data_to_insert);
    }
}

/* End of file Medan.php */
