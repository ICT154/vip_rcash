<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Depo extends CI_Controller
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
        $this->load->model('M_datatables_v2', 'dt_v2');
    }

    function index()
    {
        echo "ok";
    }

    function batalkan_deposit()
    {
        $id = $this->input->post('id');
        if ($id == null) {
            $this->M_log->show_msg("error", "ID Deposit Tidak Ditemukan");
            $this->M_log->log_in("ID Deposit Tidak Ditemukan", "Gagal", "batalkan_deposit");
        } else {
            if ($this->GZL->dekrip($id) == null) {
                $this->M_log->show_msg("error", "ID Deposit Tidak Ditemukan");
                $this->M_log->log_in("ID Deposit Tidak Ditemukan ( GAGAL DEKRIP )", "Gagal", "batalkan_deposit");
            } else {
                $id = $this->GZL->dekrip($id);
                $data = $this->depo->get_deposit_by_id($id);
                if ($data < 1) {
                    $this->M_log->show_msg("error", "ID Deposit Tidak Ditemukan");
                    $this->M_log->log_in("ID Deposit Tidak Ditemukan ( DATA NULL ) $id", "Gagal", "batalkan_deposit");
                } else {
                    $this->depo->batalkan_deposit($id);
                    $this->M_log->show_msg("success", "Deposit Berhasil Dibatalkan");
                    $this->M_log->log_in("Deposit Berhasil Dibatalkan", "Berhasil", "batalkan_deposit");
                }
            }
        }
    }

    function view_data_query()
    {
        $tables = "t_deposit";
        $search = array('kode_deposit', 'date_depo', 'provider', 'get_saldo', 'status');
        $where  = array('username' => $this->session->userdata("user"));
        // jika memakai IS NULL pada where sql
        $isWhere = null;
        // $isWhere = 'artikel.deleted_at IS NULL';
        header('Content-Type: application/json');
        echo $this->dt_v2->get_tables_where($tables, $search, $where, $isWhere);
    }


    function view_data_where()
    {


        $query  = "SELECT * FROM t_deposit";
        $search = array(
            'date_depo', 'kode_deposit', 'date_depo', 'provider', 'get_saldo', 'status', 'username'
        );
        // $where = null;
        $where  = array('username' => 'raden');
        $where_in = array();
        // jika memakai IS NULL pada where sql
        $isWhere = null;
        // $isWhere = 'artikel.deleted_at IS NULL';
        header('Content-Type: application/json');
        echo $this->dt_v2->get_tables_query_sql_srv($query, $search, $where, $isWhere, $where_in, "DESC");
    }

    function riwayat_deposit_table()
    {
        // Kolom yang akan ditampilkan pada tabel
        $columns = array(
            'kode_deposit', 'date_depo', 'provider', 'get_saldo', 'status'
        );

        // Query untuk mengambil data dari database
        $query = $this->db->select($columns)
            ->from('t_deposit')
            ->order_by('date_depo', 'desc')
            ->get();

        // Total baris data yang tersedia
        $total_rows = $this->db->count_all('users');

        // Baris data yang ditampilkan pada tabel
        $data = array();

        foreach ($query->result_array() as $row) {
            $data[] = $row;
        }

        // Data yang dikirim ke DataTables
        $output = array(
            'draw' => intval($this->input->get('draw')),
            'recordsTotal' => $total_rows,
            'recordsFiltered' => $total_rows,
            'data' => $data
        );

        // Mengirim data dalam format JSON
        echo json_encode($output);
    }

    function riwayat_deposit()
    {

        $data = array(
            'user' => $this->member->get_user_by_ses(),
            'sidebar_one' => "RCASH",
            'sidebar_two' => "Deposit",
            'breadcrumb' => "Riwayat Deposit",
            'icon_subheader' => "subheader-icon fal fa-file-invoice",
            'bc_1' => "Riwayat Deposit",
            'bc_2' => "Riwayat Deposit Kamu Bakalan Muncul Disini",
            'title' => "RCASH | RIWAYAT DEPOSIT",
        );

        $this->load->view('templates/header', $data);
        $this->load->view('member/riwayat/index');
        $this->load->view('templates/footer');
        $this->load->view('member/riwayat/index-js');
    }

    function deposit_baru_sv()
    {
        if ($this->input->post("nominal_deposit")) {
            if ($this->input->post("metode_pembayaran")) {

                $nominal = $this->GZL->filter_input_data($this->input->post("nominal_deposit"));
                $metode = $this->GZL->filter_input_data($this->input->post("metode_pembayaran"));

                if ($this->GZL->is_numeric_value($nominal) != FALSE) {
                    if ($this->depo->cek_depo_methode($metode) != FALSE) {
                        if (str_replace(",", "", $nominal) < 10000) {
                            $this->M_log->show_msg("error", "NOMINAL DEPOSIT MINIMAL Rp. 10.000 !");
                            $this->M_log->log_in("NOMINAL DEPOSIT MINIMAL Rp. 10.000", "Gagal", "deposit_baru_sv");
                            redirect(base_url('deposit-baru'));
                        } else {
                            if ($this->depo->save_data($nominal, $metode) != FALSE) {
                                $this->M_log->show_msg("success", "DEPOSIT Rp. $nominal BERHASIL, SILAHKAN SEGERA DIBAYAR");
                                $this->M_log->log_in("DEPOSIT ", "Sukses", "deposit_baru_sv");
                                redirect(base_url('deposit-baru'));
                            } else {
                                $this->M_log->show_msg("error", "DEPOSIT ERROR !");
                                $this->M_log->log_in("SERVER DEPOSIT ERROR ", "Gagal", "deposit_baru_sv");
                                redirect(base_url('deposit-baru'));
                            }
                        }
                    } else {
                        $this->M_log->show_msg("error", "METODE DEPOSIT TIDAK ADA !");
                        $this->M_log->log_in("METODE DEPOSIT TIDAK ADA", "Gagal", "deposit_baru_sv");
                        redirect(base_url('deposit-baru'));
                    }
                } else {
                    $this->M_log->show_msg("error", "NOMINAL DEPOSIT TIDAK BENAR $nominal !");
                    $this->M_log->log_in("NOMINAL DEPOSIT BUKAN ANGKA / INTEGER  $nominal", "Gagal", "deposit_baru_sv");
                    redirect(base_url('deposit-baru'));
                }
            } else {
                $this->M_log->show_msg("error", "SILAHKAN ISI DENGAN BENAR !");
                $this->M_log->log_in("METODE DEPOSIT TIDAK ADA ", "Gagal", "deposit_baru_sv");
                redirect(base_url('deposit-baru'));
            }
        } else {
            $this->M_log->show_msg("error", "SILAHKAN ISI DENGAN BENAR !");
            $this->M_log->log_in("NOMINAL DEPOSIT TIDAK ADA ", "Gagal", "deposit_baru_sv");
            redirect(base_url('deposit-baru'));
        }
    }

    function deposit_invoice()
    {
        $data_depo = $this->member->get_data_depo_by_ses()->row_array();

        $data = array(
            'user' => $this->member->get_user_by_ses(),
            'sidebar_one' => "RCASH",
            'sidebar_two' => "Deposit",
            'breadcrumb' => "INVOICE " . $data_depo['kode_deposit'] . "",
            'icon_subheader' => "subheader-icon fal fa-file-invoice",
            'bc_1' => "INVOICE " . $data_depo['kode_deposit'] . "",
            'bc_2' => "Disini akan muncul informasi cara pembayaran deposit kamu",
            'title' => "RCASH | DEPOSIT BARU",
            'data_depo' => $this->member->get_data_depo_by_ses()->row_array(),
        );

        $this->load->view('templates/header', $data);
        $this->load->view('member/invoice/index');
        $this->load->view('templates/footer');
        $this->load->view('member/invoice/index-js');
    }


    function deposit_baru()
    {

        if ($this->member->get_data_depo_by_ses()->num_rows() > 0) {
            $this->deposit_invoice();
        } else {
            $data = array(
                'user' => $this->member->get_user_by_ses(),
                'sidebar_one' => "RCASH",
                'sidebar_two' => "Deposit",
                'breadcrumb' => "Deposit Baru",
                'icon_subheader' => "subheader-icon fal fa-wallet",
                'bc_1' => "DEPOSIT",
                'bc_2' => "Jika kamu ingin deposit, silahkan isi form deposit dibawah ini ",
                'title' => "RCASH | DEPOSIT BARU",
                'data_depo' => $this->member->get_data_depo_by_ses(),
                'method_depo' => $this->depo->get_depo_methode()->result()
            );

            $this->load->view('templates/header', $data);
            $this->load->view('member/deposit/index');
            $this->load->view('member/deposit/index-js');
            $this->load->view('templates/footer');
        }
    }

    function logout()
    {
        $this->session->unset_userdata(array('user' => ''));
        $this->session->sess_destroy();
        // $this->M_log->log_in('BERHASIL LOGOUT ');
        $this->session->set_flashdata('message', '<script>toastr["error"]("Your Username or Password is wrong, please try again")
        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": true,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": true,
            "onclick": null,
            "showDuration": 300,
            "hideDuration": 100,
            "timeOut": 5000,
            "extendedTimeOut": 1000,
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
          }</script>');
        redirect('auth');
    }
}

/* End of file Dashboard.php */
