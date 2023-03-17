<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_deposit extends CI_Model
{

    function batalkan_deposit($id)
    {
        $this->db->where('kode_deposit', $id);
        $this->db->update('t_deposit', array('status' => 'Error'));
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    function get_deposit_by_id($id)
    {
        $this->db->where('kode_deposit', $id);
        $res = $this->db->get('t_deposit', 1)->num_rows();
        return $res;
    }


    function get_user_by_ses()
    {
        $this->db->where('username', $this->session->userdata('user'));
        $res = $this->db->get('t_member', 1)->row_array();
        return $res;
    }

    function save_data($nominal, $metode)
    {
        $nominal = str_replace(",", "", $nominal);
        $depo = $this->get_data_methode($metode);

        $data = array(
            'kode_deposit' => $this->generate_depo_code(),
            'username' => $this->session->userdata('user'),
            'tipe' => "",
            "provider" => $depo['provider'],
            "payment" => $depo['nama'],
            "tujuan" => $depo['tujuan'],
            "jumlah_transfer" => $nominal + rand(0, 999),
            "get_saldo" => $nominal,
            "status" => "Pending",
            "place_from" => "Website",
            "date_depo" => date("Y-m-d H:i:s")
        );
        $this->db->insert('t_deposit', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    function get_data_methode($id)
    {
        $this->db->where('id', $id);
        $cek = $this->db->get('t_deposit_method', 1)->row_array();
        return $cek;
    }


    function cek_depo_methode($id)
    {
        $this->db->where('id', $id);
        $cek = $this->db->get('t_deposit_method', 1)->num_rows();

        if ($cek > 0) {
            return true;
        } else {
            return false;
        }
    }

    function get_depo_methode()
    {
        return $this->db->get('t_deposit_method');
    }

    function generate_depo_code($length = 6)
    {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'; // karakter yang digunakan untuk membuat kode
        $code = ''; // variabel untuk menyimpan kode

        // loop sebanyak $length kali untuk membuat kode dengan panjang $length
        for ($i = 0; $i < $length; $i++) {
            $code .= $characters[rand(0, strlen($characters) - 1)]; // tambahkan karakter acak ke dalam kode
        }

        return "R" . $code; // kembalikan kode
    }
}

/* End of file M_deposit.php */
