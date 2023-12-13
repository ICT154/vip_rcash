<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Top_user extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('user') == '' or $this->session->userdata('user') == null) {
            redirect('auth');
        }
        $this->load->model('member/M_member', "member");
        $this->load->model('M_log');
        $this->load->model('M_gzl', 'GZL');
        $this->load->model('deposit/M_deposit', 'deposit');
    }

    public function index()
    {
        $data = array(
            'user' => $this->member->get_user_by_ses(),
            'sidebar_one' => "RCASH",
            'sidebar_two' => "TOP USER",
            'breadcrumb' => "",
            'icon_subheader' => "subheader-icon fal fa-medal",
            'bc_1' => "TOP USER",
            'bc_2' => "Dibawah ini merupakan top 5 pengguna dengan total pemesanan dan deposit tertinggi bulan lalu.
            Terimakasih telah menjadi pelanggan setia kami!",
            'title' => "RCASH | TOP USER",
            'top_deposit' => $this->deposit->getTopDepositUsers(date('Y-m-d', strtotime('first day of last month')), date('Y-m-d', strtotime('last day of last month'))),
            'top_user_order' => $this->deposit->getTopTransactionUsers(date('Y-m-d', strtotime('first day of last month')), date('Y-m-d', strtotime('last day of last month'))),
        );

        $this->load->view('templates/header', $data);
        $this->load->view('member/top_user/index');
        $this->load->view('templates/footer');
        $this->load->view('member/top_user/index-js');
    }
}

/* End of file Top_user.php */
