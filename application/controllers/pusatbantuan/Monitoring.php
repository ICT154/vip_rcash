<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Monitoring extends CI_Controller
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
        $this->load->model('Ticket/M_ticket', 'ticket');
        $this->load->model('monitoring/M_monitoring', 'monitoring');
    }

    function tabel_monitoring()
    {
        header('Content-Type: application/json');
        $list = $this->monitoring->get_datatables("transaction", 'transaction_date', 'DESC');
        $data = array();
        $no = $this->input->post('start');


        $user = $this->session->userdata('user');


        foreach ($list as $rows) {



            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $this->GZL->format_tanggal($rows->transaction_date);
            $row[] = $rows->service;
            if ($rows->status == "Success") {
                $row[] = '<span class="badge badge-success">Success</span>';
            } else if ($rows->status == "Pending") {
                $row[] = '<span class="badge badge-warning">Pending</span>';
            } else if ($rows->status == "Error") {
                $row[] = '<span class="badge badge-danger">Error</span>';
            } else {
                $row[] = '<span class="badge badge-danger">Error</span>';
            }

            $row[] = $this->GZL->number_format($rows->quantity);
            $row[] = "Rp. " . $this->GZL->number_format($rows->price);

            $data[] = $row;
        }

        $output = array(
            "draw" => $this->input->post('draw'),
            "recordsTotal" => $this->monitoring->count_all("transaction"),
            "recordsFiltered" => $this->monitoring->count_filtered("transaction", 'transaction_date', 'DESC'),
            "data" => $data,
            "token" => $this->security->get_csrf_hash()
        );
        //output to json format
        $this->output->set_output(json_encode($output));
    }

    public function index()
    {
        $data = array(
            'user' => $this->member->get_user_by_ses(),
            'sidebar_one' => "RCASH",
            'sidebar_two' => "Monitoring",
            'breadcrumb' => "",
            'icon_subheader' => "subheader-icon fal fa-tv",
            'bc_1' => "Monitoring",
            'bc_2' => "Ini Adalah Halaman Monitor Pesanan, Yang Anda Bisa melihat pesanan sukses Hari ini, Sehingga layanan dibawah ini Bisa direkomendasikan untuk di pesan",
            'title' => "RCASH | MONITORING LAYANAN",
        );

        $this->load->view('templates/header', $data);
        $this->load->view('member/monitoring/index');
        $this->load->view('templates/footer');
        $this->load->view('member/monitoring/index-js');
    }
}

/* End of file Monitoring.php */
