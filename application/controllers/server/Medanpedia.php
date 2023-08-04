<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Medanpedia extends CI_Controller
{
    private $api_url = 'https://api.medanpedia.co.id/';
    // private $api_id = '13646'; // ganti dengan API ID Anda
    // private $api_key = '681c19-9db872-ed0378-d66525-514239'; // ganti dengan API KEY Anda

    private $api_id = '14928'; // ganti dengan API ID Anda
    private $api_key = '6c6000-e9fccd-c2dd74-b8e3f5-02506b'; // ganti dengan API KEY Anda


    public function __construct()
    {
        parent::__construct();
        $this->load->model('server/M_Medan', 'mp');
        $this->load->model('M_log');
    }

    function get_status_pesanan()
    {

        $get_id_pesanan = $this->mp->get_id_pesanan();

        if ($get_id_pesanan) {
            foreach ($get_id_pesanan as $data_id) {
                $res = $this->call_api(array(
                    'id' => $data_id['trxid']
                ), 'status');

                if ($res != false) {
                    $data = json_decode($res, true);
                    if ($data['status'] != false or $data['status'] != '1') {
                        $this->M_log->log_in("Berhasil Mendapat Status Pesanan MEDANPEDIA", "Berhasil", "get_status_pesanan");
                        $this->mp->insert_status_pesanan($data, $data_id['transaction_id']);
                    } else {
                        $this->M_log->log_in("Gagal Mendapat Status Pesanan - API FAIL $data->data ", "Gagal", "get_status_pesanan");
                        echo "Gagal Mendapat Status Pesanan - API FAIL $data->data ";
                        return false;
                    }
                } else {
                    $this->M_log->log_in("Gagal Mendapat Status Pesanan - CURL FAIL", "Gagal", "get_status_pesanan");
                    return false;
                }
            }
        } else {
            $this->M_log->log_in("Gagal Mendapat Status Pesanan - ID PESANAN KOSONG", "Gagal", "get_status_pesanan");
            return false;
        }
    }

    function get_layanan()
    {
        $res = $this->call_api(array(), 'services');

        if ($res != false) {
            $data = json_decode($res);
            if ($data->status != false) {
                $this->M_log->log_in("Berhasil Mendapat Layanan SOSMED MEDANPEDIA", "Berhasil", "get_layanan");
                $this->mp->insert_layanan_smm($data);
            } else {
                $this->M_log->log_in("Gagal Mendapat Layanan SOSIAL MEDIA - API FAIL $data->data ", "Gagal", "get_layanan");
                echo "Gagal Mendapat Layanan Prepaid - API FAIL $data->data ";
                return false;
            }
        } else {
            $this->M_log->log_in("Gagal Mendapat Layanan Prepaid - CURL FAIL", "Gagal", "get_layanan");
            return false;
        }
    }


    private function call_api($data_post = array(), $api)
    {
        try {

            if (!empty($data_post)) {
                $api_url = $this->api_url . $api;

                // set API key and signature in data
                $data = array_merge($data_post, array(
                    'api_id' => $this->api_id,
                    'api_key' => $this->api_key,
                ));

                // call API
                $ch = curl_init($api_url);
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $response = curl_exec($ch);
                curl_close($ch);

                return $response;
            } else {
                $api_url = $this->api_url . $api;

                // set API key and signature in data
                $data_post['api_id'] = $this->api_id;
                $data_post['api_key'] = $this->api_key;

                // call API
                $ch = curl_init($api_url);
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data_post));
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $response = curl_exec($ch);
                curl_close($ch);

                return $response;
            }
        } catch (Exception $e) {
            return false;
        }
    }
}

/* End of file Medanpedia.php */
