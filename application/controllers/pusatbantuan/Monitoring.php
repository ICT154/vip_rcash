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
    }

    function tabel_monitoring()
    {
        header('Content-Type: application/json');
        $list = $this->ticket->get_datatables("ticket", 'date_g', 'DESC');
        $data = array();
        $no = $this->input->post('start');


        $user = $this->session->userdata('user');


        foreach ($list as $rows) {

            $tanggal_pembaruan = $this->ticket->get_last_tanggal($rows->id_tickets);

            if ($tanggal_pembaruan != false) {
                $tanggal_pembaruan = $this->GZL->format_tanggal($tanggal_pembaruan);
            } else {
                $tanggal_pembaruan = "-";
            }

            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $rows->id_tickets;
            $row[] = $this->GZL->format_tanggal($rows->date_g);
            $row[] = $tanggal_pembaruan;
            $row[] = $rows->tipe;
            $row[] = $rows->subjek;
            if ($rows->status == "0") {
                $row[] = '<span class="badge badge-warning">Belum Dijawab</span>';
            } elseif ($rows->status == "1") {
                $row[] = '<span class="badge badge-success">Sudah Dijawab</span>';
            } elseif ($rows->status == "Error") {
                $row[] = '<span class="badge badge-danger">Error</span>';
            }

            $msg_button = "
                <a href='" . base_url("tiket/m/" . $this->GZL->enkrip($rows->id_tickets) . "") . "' class='btn btn-xs btn-success' data-id='" . $this->GZL->enkrip($rows->id_tickets) . "' onclick='detail(this)'>Cek Detail</a>
            ";
            $row[] = $msg_button;

            $data[] = $row;
        }

        $output = array(
            "draw" => $this->input->post('draw'),
            "recordsTotal" => $this->ticket->count_all("ticket"),
            "recordsFiltered" => $this->ticket->count_filtered("ticket", 'date_g', 'DESC'),
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
            'title' => "RCASH | DAFTAR MONITORING",
        );

        $this->load->view('templates/header', $data);
        $this->load->view('member/monitoring/index');
        $this->load->view('templates/footer');
        $this->load->view('member/monitoring/index-js');
    }
}

/* End of file Monitoring.php */
