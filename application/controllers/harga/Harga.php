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
        $this->load->model('server/M_vip', 'vip');
        $this->load->model('server/M_Medan', 'mp');
        $this->load->model('M_datatables_v2', 'dt_v2');
    }

    public function index()
    {
    }

    function get_detail_layanan()
    {
        $id = htmlspecialchars($this->input->post('prod', true));
        if ($this->GZL->dekrip($id) != NULL) {
            $id = $this->GZL->dekrip($id);
            $data = $this->mp->get_detail_layanan($id);

            if ($data != false) {
                $data_price_history = $this->mp->get_price_history($data['product_id_api']);
                $data = array('detail' => $data, 'price_history' => $data_price_history);
                $this->load->view('member/harga/form/detail', $data);
            } else {
                echo "Terjadi kesalahan";
            }
        } else {
            echo "Terjadi kesalahan";
        }
    }

    function get_harga()
    {
        $id = htmlspecialchars($this->input->post('selected_option', true));
        // $type = htmlspecialchars($this->input->post('selected_type', true));
        if ($this->GZL->dekrip($id) != NULL) {
            $id = $this->GZL->dekrip($id);
            $data = $this->mp->get_list_name($id);
            $data = array('harga' => $data,);
            $this->load->view('member/harga/form/harga', $data);
        } else {
            $data = $this->mp->get_list_name();
        }
    }

    function load_kategori()
    {
        if ($this->input->post('fav') != NULL) {
            $id = htmlspecialchars($this->input->post('fav', true));
        } else {
        }
        if (!empty($id)) {
            $id = $this->GZL->dekrip($id);
            if ($id != NULL) {
                $data = array(
                    'kategori' => $this->mp->load_kategori($id),
                );
            } else {
                $data = array(
                    'kategori' => $this->mp->load_kategori("all"),
                );
            }
            $this->load->view('member/harga/form/kategori', $data);
        } else {
            $data = array(
                'kategori' => $this->mp->load_kategori("all"),
            );
            $this->load->view('member/harga/form/kategori', $data);
        }
    }

    function service_list()
    {
        $id = htmlspecialchars($this->input->post('selected_option', true));
        $type = htmlspecialchars($this->input->post('selected_type', true));
        if ($this->GZL->dekrip($id) != NULL and $this->GZL->dekrip($type) != NULL) {
            $type = $this->GZL->dekrip($type);
            if ($type == "prepaid") {
                $data = $this->vip->get_list_name("prepaid", $this->GZL->dekrip($id));
                $no  = 1;
                foreach ($data as $key) {
                    echo "<tr><td>" . $no++ . "</td><td>" . $key->name . "</td><td>" . $key->note . "</td><td>Rp. " . $this->GZL->number_format($key->price_basic, 0, ",", ".") . "</td><td>Rp. " . $this->GZL->number_format($key->price_premium, 0, ",", ".") . "</td><td class='text-center text-success'><i class='far fa-check-circle'></i></td> </tr>";
                }
            } else if ($type == "game") {
                $data = $this->vip->get_list_name("game", $this->GZL->dekrip($id));
                $no  = 1;
                foreach ($data as $key) {
                    if ($key->status != "available") {
                        $status = "<td class='text-center text-danger'><i class='far fa-times-circle'></i></td>";
                    } else {
                        $status = "<td class='text-center text-success'><i class='far fa-check-circle'></i></td>";
                    }
                    echo "<tr><td>" . $no++ . "</td><td>" . $key->name . "</td><td>Rp. " . $this->GZL->number_format($key->basic_price, 0, ",", ".") . "</td><td>Rp. " . $this->GZL->number_format($key->premium_price, 0, ",", ".") . "</td>$status </tr>";
                }
            } else if ($type == "sosmed") {
                $data = $this->vip->get_list_name("sosmed", $this->GZL->dekrip($id));
                $no  = 1;
                foreach ($data as $key) {
                    if ($key->status != "available") {
                        $status = "<td class='text-center text-danger'><i class='far fa-times-circle'></i></td>";
                    } else {
                        $status = "<td class='text-center text-success'><i class='far fa-check-circle'></i></td>";
                    }
                    echo "<tr><td>" . $no++ . "</td><td>" . $key->name . "</td><td>" . $key->min . "</td><td>" . $key->max . "</td><td>Rp. " . $this->GZL->number_format($key->basic_price, 0, ",", ".") . "</td><td>Rp. " . $this->GZL->number_format($key->premium_price, 0, ",", ".") . "</td>$status </tr>";
                }
            }
        } else {
            echo "<tr><td colspan='5' class='text-center'>Terjadi kesalahan.</td><td class='text-center text-danger'><i class='far fa-times-circle'></i></td> </tr>";
        }
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
        );

        $this->load->view('templates/header', $data);
        $this->load->view('member/harga/index_v2');
        $this->load->view('templates/footer');
        $this->load->view('member/harga/index-js_v2');
    }

    function list_harga_produk()
    {
        $data = array(
            'user' => $this->member->get_user_by_ses(),
            'sidebar_one' => "RCASH",
            'sidebar_two' => "Daftar Harga Produk",
            'breadcrumb' => "",
            'icon_subheader' => "subheader-icon fal fa-list",
            'bc_1' => "Daftar Harga",
            'bc_2' => "Daftar Harga Layanan RCASH Tersedia Disini",
            'title' => "RCASH | DAFTAR HARGA Produk",
        );

        $this->load->view('templates/header', $data);
        $this->load->view('member/harga/index_3');
        $this->load->view('templates/footer');
        $this->load->view('member/harga/index-js_v2');
    }
}

/* End of file Harga.php */
