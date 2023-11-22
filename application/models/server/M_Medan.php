<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_Medan extends CI_Model
{
    private $api_url = 'https://api.medanpedia.co.id/';
    // private $api_id = '13646'; // ganti dengan API ID Anda
    // private $api_key = '681c19-9db872-ed0378-d66525-514239'; // ganti dengan API KEY Anda

    private $api_id = '14928'; // ganti dengan API ID Anda
    private $api_key = '6c6000-e9fccd-c2dd74-b8e3f5-02506b'; // ganti dengan API KEY Anda

    public function __construct()
    {
        parent::__construct();
        ini_set('max_execution_time', 300); // 5 minutes
        $this->load->model('M_gzl', "GZL");
        // $this->load->model('member/M_member', 'member');
    }

    function get_tiket($id)
    {
        $this->db->where('transaction_id', $id);
        $query = $this->db->get('ticket', 1);
        if ($query->num_rows() > 0) {
            return $query->row_array();
        } else {
            return false;
        }
    }

    function cek_tiket($id)
    {
        $this->db->where('transaction_id', $id);
        $query = $this->db->get('ticket', 1);
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    function get_detail_pesanan_history($id)
    {
        return $this->db->where("transaction_id", $id)->order_by("change_date", "desc")->get("transactionhistory");
    }

    function get_detail_pesanan($id)
    {
        return $this->db->where("transaction_id", $id)->get("transaction", 1);
    }

    function insert_status_pesanan($data, $id)
    {


        try {
            $data_trx = array(
                // 'transaction_id' => $id_trx = "RTRX" . $this->GZL->id_unik(),
                // 'trxid' => $id,
                // 'user_id' => $data_member['user_id'],
                // 'entity_type' => "SMM",
                // 'entity_id' => $data_layanan['product_id'],
                // 'data' => $target_pesanan,
                // 'service' => $data_layanan['product_name'],
                // 'quantity' => $jumlah_pesanan,
                'status' => $data['data']['status'],
                'remain' =>  $data['data']['remains'],
                'count' => $data['data']['start_count'],
                // 'note' => $note,
                // 'price' => $total_harga,
                // 'transaction_date' => date("Y-m-d H:i:s"),
                // 'profit' => $total_harga - $price,
                // 'reffund' => 1,
                // 'provider' => 'MEDANPEDIA',
                // 'refferal_id' => $data_member['refferal_id'],
                // 'acc_type' => ''
            );
            $this->db->where('transaction_id', $id);
            $this->db->update('transaction', $data_trx);

            $get_last_data_history = $this->db->where("transaction_id", $id)->order_by("change_date", "DESC")->get("transactionhistory", 1)->row_array();



            $data_history = array(
                'transaction_id' => $id,
                'old_status' => $get_last_data_history['new_status'],
                'new_status' => $data['data']['status'],
                'quantity' => $get_last_data_history['quantity'],
                'remain' => $data['data']['remains'],
                'count' => $data['data']['start_count'],
                'change_date' => date("Y-m-d H:i:s")
            );
            $this->db->insert('transactionhistory', $data_history);
        } catch (\Throwable $th) {
            return false;
        }
    }

    function get_id_pesanan()
    {
        $this->db->select('trxid, provider, transaction_id');
        $this->db->from('transaction');
        $this->db->where_in('status', array('Pending', 'Processing'));
        $this->db->where('provider', 'medanpedia');
        // $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    function order_smm_single($data_member, $total_harga, $data_layanan, $jumlah_pesanan, $target_pesanan)
    {
        // Get the required parameters from the request (POST or GET, depending on your needs).
        $api_id = $this->api_id;
        $api_key = $this->api_key;
        $service_id = $data_layanan['product_id_api'];
        $target = $target_pesanan;
        $quantity = $jumlah_pesanan;
        $custom_comments = '';
        $custom_link = '';

        // Prepare the data to be sent in the API request.
        $data = array(
            'api_id' => $api_id,
            'api_key' => $api_key,
            'service' => $service_id,
            'target' => $target,
            'quantity' => $quantity,
            'custom_comments' => $custom_comments,
            'custom_link' => $custom_link
        );

        // You can use a HTTP library like cURL or Guzzle to make the API request.
        // Here's an example using cURL:
        $api_url = 'https://api.medanpedia.co.id/order';
        $ch = curl_init($api_url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $response = curl_exec($ch);
        curl_close($ch);

        // Handle the API response.
        if ($response) {
            // If the response is successful, parse the JSON data.
            $response_data = json_decode($response, true);

            if ($response_data['status'] === true) {
                // API request was successful, process the data.
                $id = $response_data['data']['id'];
                $price = $response_data['data']['price'];

                $this->member->tambah_trx_smm($data_member, $total_harga, $data_layanan, $jumlah_pesanan, $target_pesanan, $id, $price);
                // echo "Sukses\n";
                // echo "ID: $id\n";
                // echo "Price: $price\n";
                return true;
            } else {
                // API request failed, display the error message.
                $error_message = $response_data['data'];
                $id = '';
                $price = $total_harga;
                $this->member->tambah_trx_smm_fail($data_member, $total_harga, $data_layanan, $jumlah_pesanan, $target_pesanan, $id, $price, $error_message);
                // echo "Gagal\n";
                // echo "Error: $error_message\n";
                return false;
            }
        } else {
            // If there's an error with the API request, handle the error accordingly.
            // echo "Error: Failed to execute the API order.";
            return false;
        }
    }


    function get_data_layanan($id)
    {
        $this->db->where('product_id', $id);
        $query = $this->db->get('socialmedia', 1);
        if ($query->num_rows() > 0) {
            return $query->row_array();
        } else {
            return false;
        }
    }

    function check_layanan($id)
    {
        $this->db->where('product_id', $id);
        $query = $this->db->get('socialmedia', 1);
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    function get_price_history($id)
    {
        $this->db->where('product_id', $id);
        $this->db->order_by('change_date', 'ASC');
        $this->db->limit(20);
        $query = $this->db->get('pricehistory');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    function insert_layanan_smm($data)
    {
        foreach ($data->data as $item) {
            // membuat array untuk dimasukkan ke database
            $cek = $this->db->where("product_id_api", $item->id)->where("provider", "MEDANPEDIA")->get('socialmedia', 1);
            if ($cek->num_rows() > 0) {
                try {
                    $update_data = array(
                        'product_id_api' => $item->id,
                        'product_name' => $item->name,
                        'category' => $item->category,
                        'status' => "available",
                        'note' => $item->description,
                        'min_quantity' => $item->min,
                        'max_quantity' => $item->max,
                        'basic_price' => $item->price + ($item->price * 0.08),
                        'premium_price' => $item->price + ($item->price * 0.05),
                        'special_price' => $item->price + ($item->price * 0.02),
                        'real_price' => $item->price,
                        'provider' => "MEDANPEDIA",
                        'link_api' => "https://api.medanpedia.co.id/services",
                        'average_time' => $item->average_time,
                        'date_registered' => date("Y-m-d H:i:s"),
                    );

                    // memasukkan data ke database
                    $this->db->where('product_id_api', $item->id);
                    $this->db->update('socialmedia', $update_data);
                } catch (Exception $th) {
                    $this->M_log->log_in("Gagal Mengupdate Layanan Sosmed - Error Sistem $th", "Gagal", "service_sosmed");
                }
            } else {
                try {
                    $insert_data = array(
                        "product_id" => $this->GZL->gen_code("5", "RSM"),
                        'product_id_api' => $item->id,
                        'product_name' => $item->name,
                        'category' => $item->category,
                        'status' => "available",
                        'note' => $item->description,
                        'min_quantity' => $item->min,
                        'max_quantity' => $item->max,
                        'basic_price' => $item->price + ($item->price * 0.08),
                        'premium_price' => $item->price + ($item->price * 0.05),
                        'special_price' => $item->price + ($item->price * 0.02),
                        'real_price' => $item->price,
                        'provider' => "MEDANPEDIA",
                        'link_api' => "https://api.medanpedia.co.id/services",
                        'average_time' => $item->average_time,
                        'date_registered' => date("Y-m-d H:i:s"),
                    );

                    // memasukkan data ke database
                    $this->db->insert('socialmedia', $insert_data);
                } catch (Exception $th) {
                    $this->M_log->log_in("Gagal Memasukan Layanan Sosmed - Error Sistem $th", "Gagal", "service_sosmed");
                }
            }

            try {
                $price_history = array(
                    'entity_type' => "socialmedia",
                    'product_id' => $item->id,
                    'price_type' => "",
                    'provider' => "MEDANPEDIA",
                    'price' => $item->price,
                    'change_date' => date("Y-m-d H:i:s"),
                    'basic_price' => $item->price + ($item->price * 0.08),
                    'premium_price' => $item->price + ($item->price * 0.05),
                    'special_price' => $item->price + ($item->price * 0.02),
                );
                $this->db->insert('pricehistory', $price_history);
            } catch (Exception $th) {
                $this->M_log->log_in("Gagal Memasukan Riwayat Harga - Error Sistem $th", "Gagal", "service_sosmed");
            }
        }

        $this->M_log->log_in("Berhasil Menambah Data SOSMED MEDANPEDIA Ke Database", "Berhasil", "insert_layanan_smm");

        $this->send_truncate_sosmed($data);
    }


    function send_truncate_sosmed($data)
    {
        $this->db->truncate('socialmediatemp');
        foreach ($data->data as $item) {
            try {
                $insert_data = array(
                    "product_id" => $this->GZL->gen_code("5", "RSM"),
                    'product_id_api' => $item->id,
                    'provider' => "MEDANPEDIA",
                    'link_api' => "https://api.medanpedia.co.id/services",
                    'date_registered' => date("Y-m-d H:i:s")
                );
                $this->db->insert('socialmediatemp', $insert_data);
            } catch (Exception $th) {
                $this->M_log->log_in("Gagal Memasukan Layanan Sosmed - Error Sistem $th", "Gagal", "service_sosmed");
            }
        }
        $this->db->select("product_id_api, provider");
        $this->db->where('provider', "MEDANPEDIA");
        $data_server_utama = $this->db->get('socialmedia')->result();
        foreach ($data_server_utama as $key) {
            // $this->db->where('provider', "VIPRESELLER");
            $this->db->where('product_id_api', $key->product_id_api);
            $cek_data = $this->db->get('socialmediatemp', 1);
            if ($cek_data->num_rows() > 0) {
            } else {
                try {
                    $this->db->where('provider', "MEDANPEDIA");
                    $this->db->where('product_id_api', $key->product_id_api);
                    $this->db->delete('socialmedia');
                    if ($this->db->affected_rows() > 0) {
                        echo "SUKSES DELETE TO DATABASE <br>";
                    } else {
                        echo "FAIL DELETE TO DATABASE <br>";
                    }
                } catch (Exception $th) {
                    $this->M_log->log_in("Gagal Menghapus Layanan Sosmed - Error Sistem $th", "Gagal", "service_sosmed");
                }
            }
        }
    }


    function get_detail_layanan($id)
    {
        if (!empty($id)) {
            $this->db->where('product_id', $id);
            return $this->db->get('socialmedia')->row_array();
        } else {
            return false;
        }
    }

    function get_list_name($id)
    {
        if (!empty($id)) {
            $this->db->like('category', $id, 'both');
            $this->db->order_by('basic_price', 'asc');
            return $this->db->get('socialmedia')->result();
        } else {
            $this->db->order_by('basic_price', 'asc');
            return $this->db->get('socialmedia')->result();
        }
    }
    function load_kategori($data)
    {
        if (!empty($data)) {
            if ($data == "all") {
                $this->db->distinct();
                $this->db->select('category');
                $this->db->order_by('category', 'asc');
                return $this->db->get('socialmedia')->result();
            } else {
                $this->db->distinct();
                $this->db->like("category", $data, "both");
                $this->db->select('category');
                $this->db->order_by('category', 'asc');
                return $this->db->get('socialmedia')->result();
            }
        } else {
            $this->db->distinct();
            $this->db->select('category');
            $this->db->order_by('category', 'asc');
            return $this->db->get('socialmedia')->result();
        }
    }

    function add_layanan($data)
    {

        $data = json_decode($data); // $json_data adalah string JSON yang berisi objek tersebut
        $data_to_insert = array(); // inisialisasi array kosong untuk menampung data yang akan diinsert

        foreach ($data->data as $obj) {
            $data_to_insert[] = array(
                'id' => $obj->id,
                'category' => $obj->category,
                'name' => $obj->name,
                'price' => $obj->price,
                'price_sell' => $obj->price + ($obj->price * 0.15),
                'min' => $obj->min,
                'max' => $obj->max,
                'description' => $obj->description,
                'type' => $obj->type,
                'refill' => $obj->refill,
                'masa_refill' => $obj->masa_refill,
                'average_time' => $obj->average_time,
                'date_g' => date("Y-m-d H:i:s")
            );
        }
        $this->db->truncate('t_sosmed_v2');
        $this->db->insert_batch('t_sosmed_v2', $data_to_insert);
    }
}

/* End of file Medan.php */
