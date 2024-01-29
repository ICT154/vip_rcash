<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        try {
            if ($this->session->userdata('user') == '' or $this->session->userdata('user') == null) {
                redirect('auth');
            }
        } catch (Exception $e) {
            $this->session->unset_userdata(array('user' => ''));
            $this->session->sess_destroy();
            redirect('auth');
        }
        $this->load->model('member/M_member', "member");
        $this->load->model('M_log', "LOG");
    }

    public function index()
    {
    }

    function dashboard_index()
    {
        $data = array(
            'user' => $this->member->get_user_by_ses(),
            'sidebar_one' => "RCASH",
            'sidebar_two' => "Dashboard",
            'breadcrumb' => "",
            'icon_subheader' => "subheader-icon fal fa-dashboard",
            'bc_1' => "DASHBOARD",
            'bc_2' => "Halo Selamat Datang di Dashboard Admin",
            'title' => "RCASH | DASHBOARD ADMIN",
            'tot_pesan_smm' => $this->member->get_tot_smm_by_ses(),
            'tot_depo' => $this->member->get_tot_depo_by_ses(),
            'file_js' => "laporan_rkat_return",
            'tot_trx' => $this->member->get_count_trx_by_ses(''),
            'tot_trx_success' => $this->member->get_count_trx_by_ses('Success'),
            'tot_trx_pending' => $this->member->get_count_trx_by_ses('Pending'),
            // 'tot_trx_processing' => $this->member->get_count_trx_by_ses('Processing'),
            // 'tot_trx_partial' => $this->member->get_count_trx_by_ses('Partial'),
            // 'tot_trx_failed' => $this->member->get_count_trx_by_ses('Failed'),
            // 'tot_trx_refund' => $this->member->get_count_trx_by_ses('Refund'),
            // 'tot_trx_cancel' => $this->member->get_count_trx_by_ses('Cancel'),
            'tot_trx_error' => $this->member->get_count_trx_by_ses('Error'),
            'tot_trx_one_week' => $this->member->get_count_trx_by_ses_one_week(),
            'get_pengumuman' => $this->member->get_pengumuman(),
        );



        $this->load->view('templates/header', $data);
        $this->load->view('member/dashboard/index');
        $this->load->view('member/dashboard/index-js');
        $this->load->view('templates/footer');
    }
}

/* End of file Dashboard.php */
