<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Tiket extends CI_Controller
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
        $this->load->model('Ticket/M_ticket', 'ticket');
        $this->load->model('M_tabel2', 'tabel2');
    }

    function tiket_detail($id = '')
    {

        if ($id == "" || $id == null) {
            redirect(base_url('tiket'));
        }


        if ($this->GZL->dekrip($id)) {
            $id = $this->GZL->dekrip($id);
            $data_tiket = $this->ticket->get_tiket_by_id($id);
            if ($data_tiket['user_id'] != $this->member->get_user_by_ses()['user_id']) {
                redirect(base_url('tiket'));
            } else {

                if (isset($data_tiket)) {
                    // $this->db->set('status', '1');
                    // $this->db->where('id_tickets', $id);
                    // $this->db->update('ticket');

                    $data = array(
                        'user' => $this->member->get_user_by_ses(),
                        'sidebar_one' => "RCASH",
                        'sidebar_two' => "Tiket",
                        'breadcrumb' => "",
                        'icon_subheader' => "subheader-icon fal fa-ticket",
                        'bc_1' => "Tiket",
                        'bc_2' => "Jika kamu kesulitan & butuh bantuan, bisa lewat sini !",
                        'title' => "RCASH | DAFTAR TIKET",
                        'id' => $id,
                        'data_tiket' => $data_tiket,
                    );

                    $this->load->view('templates/header', $data);
                    $this->load->view('member/tiket/detail');
                    $this->load->view('templates/footer');
                    $this->load->view('member/tiket/detail-js');
                } else {
                    redirect(base_url('tiket'));
                }
            }
        } else {
            redirect(base_url('tiket'));
        }
    }


    function data_tiket_table()
    {
        header('Content-Type: application/json');
        $list = $this->tabel2->get_datatables("ticket", 'date_g', 'DESC');
        $data = array();
        $no = $this->input->post('start');


        $user = $this->session->userdata('user');


        foreach ($list as $rows) {

            $tanggal_pembaruan = $this->ticket->get_last_tanggal($rows->id_tickets);
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $this->GZL->format_tanggal($rows->date_g);
            $row[] = $this->GZL->format_tanggal($tanggal_pembaruan);
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
            "recordsTotal" => $this->tabel2->count_all("transaction"),
            "recordsFiltered" => $this->tabel2->count_filtered("transaction", 'transaction_date', 'DESC'),
            "data" => $data,
            "token" => $this->security->get_csrf_hash()
        );
        //output to json format
        $this->output->set_output(json_encode($output));
    }

    function tiket_sv()
    {
        $tiket = htmlspecialchars($this->input->post('subjek_tiket', true));
        $tipe_tiket = htmlspecialchars($this->input->post('tipe_tiket', true));
        $pesan_tiket = $this->input->post('pesan_tiket');

        if ($tiket == "" || $tipe_tiket == "" || $pesan_tiket == "") {
            $this->M_log->show_msg("error",  "Gagal", "Data tidak boleh kosong !");
            $this->M_log->log_in("Gagal", "Membuat tiket baru, data tidak boleh kosong !");
        } else {
            try {
                if ($this->ticket->send_ticket($tiket, $tipe_tiket, $pesan_tiket)) {
                    $this->M_log->show_msg("success",  "Berhasil Tiket berhasil dibuat !");
                    $this->M_log->log_in("Berhasil", "Membuat tiket baru, berhasil !");
                } else {
                    $this->M_log->show_msg("error",  "Gagal Terjadi kesalahan !");
                    $this->M_log->log_in("Gagal", "Membuat tiket baru, terjadi kesalahan !");
                }
            } catch (\Throwable $th) {
                $this->M_log->show_msg("error",  "Gagal Terjadi kesalahan !");
                $this->M_log->log_in("Gagal", "Membuat tiket baru, terjadi kesalahan !");
            }
        }

        redirect('tiket');
    }

    public function index()
    {
        $data = array(
            'user' => $this->member->get_user_by_ses(),
            'sidebar_one' => "RCASH",
            'sidebar_two' => "Tiket",
            'breadcrumb' => "",
            'icon_subheader' => "subheader-icon fal fa-ticket",
            'bc_1' => "Tiket",
            'bc_2' => "Jika kamu kesulitan & butuh bantuan, bisa lewat sini !",
            'title' => "RCASH | DAFTAR TIKET",
        );

        $this->load->view('templates/header', $data);
        $this->load->view('member/tiket/index');
        $this->load->view('templates/footer');
        $this->load->view('member/tiket/index-js');
    }
}

/* End of file Tiket.php */
