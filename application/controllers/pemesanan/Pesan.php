<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Pesan extends CI_Controller
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
        $this->load->model('server/M_vip', 'vip');
        $this->load->model('server/M_Medan', 'mp');
        $this->load->model('M_datatables_v2', 'dt_v2');
    }

    function layanan_detail()
    {
        $id = htmlspecialchars($this->input->post('selected_option', true));
        // $type = htmlspecialchars($this->input->post('selected_type', true));
        if ($this->GZL->dekrip($id) != NULL) {
            $id = $this->GZL->dekrip($id);
            $data = $this->mp->get_detail_layanan($id);
            $data = array('harga' => $data,);
            $this->load->view('member/pemesanan/form/harga_detail', $data);
        } else {
            $data = $this->mp->get_list_name();
        }
    }

    function layanan()
    {
        $id = htmlspecialchars($this->input->post('selected_option', true));
        // $type = htmlspecialchars($this->input->post('selected_type', true));
        if ($this->GZL->dekrip($id) != NULL) {
            $id = $this->GZL->dekrip($id);
            $data = $this->mp->get_list_name($id);
            $data = array('harga' => $data,);
            $this->load->view('member/pemesanan/form/harga', $data);
        } else {
            $data = $this->mp->get_list_name();
        }
    }

    public function pesanan()
    {
        $data = array(
            'user' => $this->member->get_user_by_ses(),
            'sidebar_one' => "RCASH",
            'sidebar_two' => "Pemesanan Sosial Media",
            'breadcrumb' => "",
            'icon_subheader' => "subheader-icon fal fa-hashtag",
            'bc_1' => "Pemesanan Sosial Media",
            'bc_2' => "Jika kamu mau pesan layanan sosial media RCASH, kamu bisa pesan disini ya! ",
            'title' => "RCASH | PEMESANAN SOSIAL MEDIA",
            'kategori' => $this->mp->load_kategori("all"),
        );



        $this->load->view('templates/header', $data);
        $this->load->view('member/pemesanan/index');

        $this->load->view('templates/footer');
        $this->load->view('member/pemesanan/index-js');
    }
}

/* End of file Pesan.php */
