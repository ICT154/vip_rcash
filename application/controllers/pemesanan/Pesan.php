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
        $this->load->model('M_tabel2', 'tabel2');
        $this->load->model('ticket/M_ticket', 'tiket');
    }

    function komplain_smm()
    {
        $id_pesanan = htmlspecialchars($this->input->post('id_pesanan', true));
        $komplain_teks = $this->input->post('komplain_teks', true);

        $cek_pesanan = $this->mp->get_detail_pesanan($this->GZL->dekrip($id_pesanan));
        if ($cek_pesanan->num_rows() > 0) {
            if ($komplain_teks != null or $komplain_teks != '') {
                if ($this->tiket->komplain_smm($this->GZL->dekrip($id_pesanan), $komplain_teks)) {
                    $this->M_log->show_msg("success", "KOMPLAIN BERHASIL DIBUAT !");
                    $this->M_log->log_in("KOMPLAIN BERHASIL DIBUAT !", "Berhasil", "komplain_smm");
                    redirect(base_url('riwayat-pesanan'));
                } else {
                    $this->M_log->show_msg("error", "GAGAL MEMBUAT KOMPLAIN !");
                    $this->M_log->log_in("GAGAL MEMBUAT KOMPLAIN !", "Gagal", "komplain_smm");
                    redirect(base_url('riwayat-pesanan'));
                }
            } else {
                $this->M_log->show_msg("error", "KOMPLAIN TIDAK BOLEH KOSONG !");
                $this->M_log->log_in("KOMPLAIN TIDAK BOLEH KOSONG !", "Gagal", "komplain_smm");
                redirect(base_url('riwayat-pesanan'));
            }
        } else {
            $this->M_log->show_msg("error", "PESANAN TIDAK DITEMUKAN !");
            $this->M_log->log_in("PESANAN TIDAK DITEMUKAN !", "Gagal", "komplain_smm");
            redirect(base_url('riwayat-pesanan'));
        }
    }


    function riwayat_smm_komplain()
    {
        $id = htmlspecialchars($this->input->post('id_pesanan', true));
        if ($idx = $this->GZL->dekrip($id)) {

            $data = $this->mp->get_detail_pesanan($idx);
            $cek_tiket = $this->tiket->cek_tiket($idx);
            if ($data->num_rows() > 0) {
                $data_history = $this->mp->get_detail_pesanan_history($idx);
                if ($cek_tiket != false) {
                    $data_tiket = $this->tiket->get_tiket_limit($idx);
                    $data = array('datax' => $data->row_array(), "data_history" => $data_history->result(), "data_tiket" => $data_tiket);
                } else {
                    $data = array('datax' => $data->row_array(), "data_history" => $data_history->result());
                }
                $this->load->view('member/riwayat_pemesanan_smm/komplain/index', $data);
            } else {
                echo "Data Tidak Ditemukan !";
            }
        } else {
            echo "Data Tidak Ditemukan !";
        }
        $this->load->view('member/riwayat_pemesanan_smm/komplain/form_komplain');
    }

    function riwayat_smm_detail()
    {
        $id = htmlspecialchars($this->input->post('id_pesanan', true));
        if ($idx = $this->GZL->dekrip($id)) {

            $data = $this->mp->get_detail_pesanan($idx);
            if ($data->num_rows() > 0) {
                $data_history = $this->mp->get_detail_pesanan_history($idx);
                $data = array('datax' => $data->row_array(), "data_history" => $data_history->result());
                $this->load->view('member/riwayat_pemesanan_smm/detail', $data);
            } else {
                echo "Data Tidak Ditemukan !";
            }
        } else {
            echo "Data Tidak Ditemukan !";
        }
    }

    function riwayat_smm_table()
    {
        header('Content-Type: application/json');
        $list = $this->tabel2->get_datatables("transaction", 'transaction_date', 'DESC');
        $data = array();
        $no = $this->input->post('start');


        $user = $this->session->userdata('user');


        foreach ($list as $rows) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $this->GZL->format_tanggal($rows->transaction_date);
            $row[] = $rows->service;
            $row[] = $rows->data;
            $row[] = "Rp. " . $this->GZL->number_format($rows->price, 0, ",", ".");
            $row[] =  $this->GZL->number_format($rows->quantity, 0, ",", ".");
            if ($rows->status == "Pending") {
                $row[] = '<span class="badge badge-warning">Pending</span>';
            } elseif ($rows->status == "Processing") {
                $row[] = '<span class="badge badge-info">Processing</span>';
            } elseif ($rows->status == "Partial") {
                $row[] = '<span class="badge badge-primary">Partial</span>';
            } elseif ($rows->status == "Success") {
                $row[] = '<span class="badge badge-success">Success</span>';
            } elseif ($rows->status == "Error") {
                $row[] = '<span class="badge badge-danger">Error</span>';
            }

            $msg_button = "
                <button class='btn btn-xs btn-success' data-id='" . $this->GZL->enkrip($rows->transaction_id) . "' onclick='detail(this)'>Cek Detail</button>
                <button class='btn btn-xs btn-primary' data-id='" . $this->GZL->enkrip($rows->transaction_id) . "' onclick='komplain(this)'>Komplain Pesanan Ini</button>
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


    function riwayat_pesanan()
    {
        $data = array(
            'user' => $this->member->get_user_by_ses(),
            'sidebar_one' => "RCASH",
            'sidebar_two' => "Deposit",
            'breadcrumb' => "Riwayat Pesanan SMM",
            'icon_subheader' => "subheader-icon fas fa-clock-rotate-left",
            'bc_1' => "Riwayat Pesanan SMM",
            'bc_2' => "Riwayat Pesanan SMM Kamu Bakalan Muncul Disini",
            'title' => "RCASH | RIWAYAT PEMESANAN SOSIAL MEDIA",
        );

        $this->load->view('templates/header', $data);
        $this->load->view('member/riwayat_pemesanan_smm/index');
        $this->load->view('templates/footer');
        $this->load->view('member/riwayat_pemesanan_smm/index-js');
    }

    function hitung_total_pesanan()
    {
        $id = htmlspecialchars($this->input->post('selected_option', true));
        $totalpesan = htmlspecialchars($this->input->post('total', true));
        $dekrip_id = $this->GZL->dekrip($id);
        if ($dekrip_id == NULL) {
            echo "Rp. 0";
        } else {
            $id = $dekrip_id;
            $data = $this->mp->get_detail_layanan($id);
            if ($totalpesan != 0 or $totalpesan != null or $totalpesan != '') {
                $totalpesan = str_replace(".", "", $totalpesan);
            } else {
                $totalpesan = 0;
            }
            $subtotal = $data['basic_price'] / 1000;
            $subtotal = $subtotal * $totalpesan;
            echo "Rp. " . $this->GZL->number_format($subtotal, 0, ",", ".");
        }
    }


    function order_smm_single()
    {
        // Jika input 'target' tidak kosong atau tidak null
        if ($this->input->post('target') != '' or $this->input->post("target") != null) {
            $layanan = htmlspecialchars($this->input->post("layanan"));
            // Jika input 'layanan' tidak kosong atau tidak null
            if ($layanan != '' or $layanan != null) {
                // Jika 'layanan' berhasil di-dekripsi
                if ($this->GZL->dekrip($layanan)) {
                    $layanan_dekrip = $this->GZL->dekrip($layanan);
                    // Jika 'layanan' terdapat dalam database
                    if ($this->mp->check_layanan($layanan_dekrip)) {
                        $data_layanan = $this->mp->get_data_layanan($layanan_dekrip);
                        // Jika data layanan ditemukan
                        if ($data_layanan) {
                            // Tambahkan kode di sini jika diperlukan

                            // Jika input 'target' berhasil di-dekripsi
                            // cek saldo member 
                            $data_member = $this->member->get_user_by_ses();
                            $jumlah_pesanan = htmlspecialchars($this->input->post("jumlah_pemesanan"));

                            if ($jumlah_pesanan != '' or $jumlah_pesanan != null or $jumlah_pesanan != 0) {
                                $jumlah_pesanan = str_replace(".", "", $jumlah_pesanan);

                                if ($jumlah_pesanan >= $data_layanan['min_quantity'] and $jumlah_pesanan <= $data_layanan['max_quantity']) {
                                    $total_harga = $data_layanan['basic_price'] / 1000;
                                    $total_harga = $total_harga * $jumlah_pesanan;

                                    if ($data_member['saldo'] >= $total_harga) {

                                        $target_pesanan = htmlspecialchars($this->input->post("target"));

                                        if ($target_pesanan != '' or $target_pesanan != NULL) {
                                            if ($this->member->potong_saldo_smm($data_member['user_id'], $total_harga)) {
                                                if ($this->mp->order_smm_single($data_member, $total_harga, $data_layanan, $jumlah_pesanan, $target_pesanan)) {
                                                    $this->M_log->show_msg("success", "PESANAN BERHASIL DIBUAT !");
                                                    $this->M_log->log_in("PESANAN BERHASIL DIBUAT !", "Berhasil", "order_smm_single");
                                                    redirect(base_url('pemesanan-sosmed'));
                                                } else {
                                                    $this->M_log->show_msg("error", "GAGAL MEMESAN ! SILAHKAN HUBUNGI ADMIN !");
                                                    $this->M_log->log_in("GAGAL MEMESAN ! SILAHKAN HUBUNGI ADMIN !", "Gagal", "order_smm_single");
                                                    redirect(base_url('pemesanan-sosmed'));
                                                }
                                            } else {
                                                $this->M_log->show_msg("error", "GAGAL MENGURANGI SALDO ANDA !");
                                                $this->M_log->log_in("GAGAL MENGURANGI SALDO ANDA !", "Gagal", "order_smm_single");
                                                redirect(base_url('pemesanan-sosmed'));
                                            }
                                        } else {
                                            $this->M_log->show_msg("error", "TARGET TIDAK BOLEH KOSONG !");
                                            $this->M_log->log_in("TARGET TIDAK BOLEH KOSONG !", "Gagal", "order_smm_single");
                                            redirect(base_url('pemesanan-sosmed'));
                                        }
                                    } else {
                                        $this->M_log->show_msg("error", "SALDO ANDA TIDAK MENCUKUPI !");
                                        $this->M_log->log_in("SALDO ANDA TIDAK MENCUKUPI", "Gagal", "order_smm_single");
                                        redirect(base_url('pemesanan-sosmed'));
                                    }
                                } else {
                                    $this->M_log->show_msg("error", "JUMLAH PESANAN TIDAK BOLEH KURANG ATAU LEBIH DARI BATAS MINIMAL DAN MAKSIMAL !");
                                    $this->M_log->log_in("JUMLAH PESANAN TIDAK BOLEH KURANG ATAU LEBIH DARI BATAS MINIMAL DAN MAKSIMAL !", "Gagal", "order_smm_single");
                                    redirect(base_url('pemesanan-sosmed'));
                                }
                            } else {
                                $this->M_log->show_msg("error", "JUMLAH PEMESANAN TIDAK BOLEH KOSONG !");
                                $this->M_log->log_in("JUMLAH PEMESANAN TIDAK BOLEH KOSONG", "Gagal", "order_smm_single");
                                redirect(base_url('pemesanan-sosmed'));
                            }
                        } else {
                            $this->M_log->show_msg("error", "LAYANAN TIDAK DITEMUKAN !");
                            $this->M_log->log_in("LAYANAN TIDAK DITEMUKAN", "Gagal", "order_smm_single");
                            redirect(base_url('pemesanan-sosmed'));
                        }
                    } else {
                        $this->M_log->show_msg("error", "LAYANAN TIDAK DITEMUKAN !");
                        $this->M_log->log_in("LAYANAN TIDAK DITEMUKAN", "Gagal", "order_smm_single");
                        redirect(base_url('pemesanan-sosmed'));
                    }
                } else {
                    $this->M_log->show_msg("error", "LAYANAN TIDAK DITEMUKAN !");
                    $this->M_log->log_in("LAYANAN TIDAK DITEMUKAN", "Gagal", "order_smm_single");
                    redirect(base_url('pemesanan-sosmed'));
                }
            } else {
                $this->M_log->show_msg("error", "LAYANAN TIDAK DIPILIH !");
                $this->M_log->log_in("LAYANAN TIDAK DIPILIH", "Gagal", "order_smm_single");
                redirect(base_url('pemesanan-sosmed'));
            }
        }
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
