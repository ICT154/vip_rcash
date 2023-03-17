<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Landing extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('user') == '' or $this->session->userdata('user') == null) {
            redirect('auth');
        }
    }


    public function index()
    {
        // $this->db->where('username', $this->session->userdata('user'));
        // $res = $this->db->get('t_admin', 1)->row_array();

        $data = array(
            // 'user' => $res,
            'sidebar_one' => "Laporan Kinerja",
            'sidebar_two' => "Laporan RKAT & Return Investasi",
            'breadcrumb' => "Laporan RKAT & Return Investasi",
            'icon_subheader' => "subheader-icon fal fa-chart-area",
            'bc_1' => "Andani",
            'bc_2' => "Laporan Kinerja ",
            'title' => "Laporan RKAT & Return Investasi - Andani",
            // 'pengguna' => $this->db->get("t_admin")->num_rows(),
            'file_js' => "laporan_rkat_return",
        );


        $this->load->view('templates/header', $data);
        $this->load->view('sandbox/main');
        $this->load->view('templates/footer');
    }
}

/* End of file Landing.php */
