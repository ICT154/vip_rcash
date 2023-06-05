<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Vip extends CI_Controller
{
    private $api_url_prepaid = 'https://vip-reseller.co.id/api/prepaid';
    private $api_url_sosmed = 'https://vip-reseller.co.id/api/social-media';
    private $api_url_game = 'https://vip-reseller.co.id/api/game-feature';
    private $api_id = 'yW36rm97'; // ganti dengan API ID Anda
    private $api_key = 'b933c520be0624e2cd8e63c05fa3a045'; // ganti dengan API KEY Anda

    public function __construct()
    {
        parent::__construct();
        $this->load->model('server/M_vip', "vip");
        $this->load->model('member/M_member', "member");
        $this->load->model('deposit/M_deposit', "depo");
        $this->load->model('M_log');
        $this->load->model('M_gzl', 'GZL');
        $this->load->model('M_datatables_v2', 'dt_v2');
    }





    public function service_prepaid()
    {
        // contoh penggunaan API
        $data = array(
            'type' => 'services',
        );
        $response = $this->call_api($data, $this->api_url_prepaid);
        if ($response == false) {
            $this->M_log->log_in("Gagal Mendapat Layanan Prepaid - CURL FAIL", "Gagal", "service_prepaid");
            return false;
        } else {
            $data = json_decode($response);
            if ($data->result == false) {
                $this->M_log->log_in("Gagal Mendapat Layanan Prepaid - API FAIL $data->message ", "Gagal", "service_prepaid");
                echo "Gagal Mendapat Layanan Prepaid - API FAIL $data->message ";
                return false;
            } else {
                $this->M_log->log_in("Berhasil Mendapat Layanan Prepaid", "Berhasil", "service_prepaid");
                $this->vip->insert_prepaid($data);
            }
        }
    }

    public function service_sosmed()
    {
        // contoh penggunaan API
        $data = array(
            'type' => 'services',
        );
        $response = $this->call_api($data, $this->api_url_sosmed);
        if ($response == false) {
            $this->M_log->log_in("Gagal Mendapat Layanan Sosmed - CURL FAIL", "Gagal", "service_sosmed");
            return false;
        } else {
            $data = json_decode($response);
            if ($data->result == false) {
                $this->M_log->log_in("Gagal Mendapat Layanan Sosmed - API FAIL $data->message ", "Gagal", "service_sosmed");
                echo "Gagal Mendapat Layanan Sosmed - API FAIL $data->message ";
                return false;
            } else {
                $this->M_log->log_in("Berhasil Mendapat Layanan Sosmed", "Berhasil", "service_sosmed");
                $this->vip->insert_sosmed($data);
            }
        }
    }

    public function service_game()
    {
        // contoh penggunaan API
        $data = array(
            'type' => 'services',
        );
        $response = $this->call_api($data, $this->api_url_game);

        if ($response == false) {
            $this->M_log->log_in("Gagal Mendapat Layanan Game - CURL FAIL", "Gagal", "service_game");
            return false;
        } else {



            $data = json_decode($response);
            if ($data->result == false) {
                $this->M_log->log_in("Gagal Mendapat Layanan Game - API FAIL $data->message ", "Gagal", "service_game");
                echo "Gagal Mendapat Layanan Game - API FAIL $data->message ";
                return false;
            } else {
                $this->M_log->log_in("Berhasil Mendapat Layanan Game", "Berhasil", "service_game");

                // echo "<pre>";
                // print_r($data);
                // echo "</pre>";

                $this->vip->insert_game($data);
            }
        }
    }

    private function call_api($data, $api)
    {
        try {
            // generate signature
            $signature = md5($this->api_id . $this->api_key);

            // set API key and signature in data
            $data['key'] = $this->api_key;
            $data['sign'] = $signature;

            // call API
            $ch = curl_init($api);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($ch);
            curl_close($ch);

            return $response;
        } catch (Exception $e) {
            return false;
        }
    }
}

/* End of file Vip.php */
