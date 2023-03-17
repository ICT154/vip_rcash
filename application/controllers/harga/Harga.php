<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Harga extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('user') == '' or $this->session->userdata('user') == null) {
            redirect('auth');
        }
        $this->load->model('member/M_member', "member");
        $this->load->model('deposit/M_deposit', "depo");
        $this->load->model('M_log');
        $this->load->model('M_gzl', 'GZL');
        $this->load->model('Server/Vip', 'vip');
        $this->load->model('M_datatables_v2', 'dt_v2');
    }

    public function index()
    {
    }

    function list_harga()
    {
        $data = array(
            'user' => $this->member->get_user_by_ses(),
            'sidebar_one' => "RCASH",
            'sidebar_two' => "Daftar Harga",
            'breadcrumb' => "",
            'icon_subheader' => "subheader-icon fal fa-list",
            'bc_1' => "Daftar Harga",
            'bc_2' => "Daftar Harga Layanan RCASH Tersedia Disini",
            'title' => "RCASH | DAFTAR HARGA",
            'prepaid_categori' => $this->vip->get_list("prepaid"),
            'game_categori' => $this->vip->get_list("game"),
            'sosmed_categori' => $this->vip->get_list("sosmed"),
        );

        $this->load->view('templates/header', $data);
        $this->load->view('member/harga/index');
        $this->load->view('templates/footer');
        $this->load->view('member/harga/index-js');
    }
}

/* End of file Harga.php */
