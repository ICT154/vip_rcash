<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Migrate extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('migrate/M_migrate', 'migrate');
        $this->rcash = $this->load->database('rcash', TRUE);
        $this->load->model('M_gzl', 'GZL');
    }


    public function users()
    {
        $data_user = $this->db->get("t_member")->result_array();
        foreach ($data_user as $key) {
            $data = array(
                'user_id' => $this->GZL->gen_code(5, "RU"),
                'username' => $key['username'],
                'password' => $key['password'],
                'nama_lengkap' => $key['nama_lengkap'],
                'email' => $key['email'],
                'saldo' => $key['saldo'],
                'status' => $key['status'],
                'tanggal_pendaftaran' => $key['register'],
                // 'browser' => $key['updated_at'],
                // 'ip_address' => $key['ip_address'],
                'level' => "basic",
                'nomer_hp' => $key['nomer_hp'],
            );
            $this->rcash->insert('users', $data);
        }
    }
}

/* End of file Migrate.php */
