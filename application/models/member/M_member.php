<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_member extends CI_Model
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_gzl', 'GZL');
    }

    function tambah_trx_smm_fail($data_member, $total_harga, $data_layanan, $jumlah_pesanan, $target_pesanan, $id, $price, $note)
    {
        try {
            $data = array(
                'transaction_id' => $id_trx = "RTRX" . $this->GZL->id_unik(),
                'trx_id' => $id,
                'user_id' => $data_member['user_id'],
                'entity_type' => "SMM",
                'entity_id' => $data_layanan['product_id'],
                'data' => $target_pesanan,
                'service' => $data_layanan['product_name'],
                'quantity' => $jumlah_pesanan,
                'status' => "Error",
                'remain' => $jumlah_pesanan,
                'count' => 0,
                'note' => $note,
                'price' => $total_harga,
                'transaction_date' => date("Y-m-d H:i:s"),
                'profit' => $total_harga - $price,
                'reffund' => 1,
                'provider' => 'MEDANPEDIA',
                'refferal_id' => $data_member['refferal_id'],
                'acc_type' => ''
            );
            $this->db->insert('transaction', $data);

            $data_history = array(
                'transaction_id' => $id_trx,
                'old_status' => 'Place Order',
                'new_status' => 'Error',
                'quantity' => $jumlah_pesanan,
                'remain' => $jumlah_pesanan,
                'count' => 0,
                'change_date' => date("Y-m-d H:i:s")
            );
            $this->db->insert('transactionhistory', $data_history);
        } catch (\Throwable $th) {
            return false;
        }
    }

    function tambah_trx_smm($data_member, $total_harga, $data_layanan, $jumlah_pesanan, $target_pesanan, $id, $price)
    {
        try {
            $data = array(
                'transaction_id' => $id_trx = "RTRX" . $this->GZL->id_unik(),
                'trx_id' => $id,
                'user_id' => $data_member['user_id'],
                'entity_type' => "SMM",
                'entity_id' => $data_layanan['product_id'],
                'data' => $target_pesanan,
                'service' => $data_layanan['product_name'],
                'quantity' => $jumlah_pesanan,
                'status' => "Pending",
                'remain' => $jumlah_pesanan,
                'count' => 0,
                'note' => '',
                'price' => $total_harga,
                'transaction_date' => date("Y-m-d H:i:s"),
                'profit' => $total_harga - $price,
                'reffund' => 0,
                'provider' => 'MEDANPEDIA',
                'refferal_id' => $data_member['refferal_id'],
                'acc_type' => ''
            );
            $this->db->insert('transaction', $data);

            $data_history = array(
                'transaction_id' => $id_trx,
                'old_status' => 'Place Order',
                'new_status' => 'Pending',
                'quantity' => $jumlah_pesanan,
                'remain' => $jumlah_pesanan,
                'count' => 0,
                'change_date' => date("Y-m-d H:i:s")
            );
            $this->db->insert('transactionhistory', $data_history);

            $data_balance_usage = array(
                'user_id' => $data_member['user_id'],
                'tanggal_penggunaan' => date("Y-m-d H:i:s"),
                'transaksi_id' => $id_trx,
                'jumlah_penggunaan' => $total_harga
            );
            $this->db->insert('balanceusage', $data_balance_usage);

            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }

    function tambah_saldo_smm($id, $nominal)
    {
        try {
            $data_member = $this->db->get_where('users', ['user_id' => $id])->row_array();

            $data_balance_history = array(
                'user_id' => $id,
                'tanggal_waktu' => date("Y-m-d H:i:s"),
                'saldo_sebelum' => $data_member['saldo'],
                'saldo_sesudah' => $data_member['saldo'] + $nominal
            );
            $this->db->insert('balancehistory', $data_balance_history);

            $this->db->set('saldo', 'saldo + ' . $nominal, FALSE);
            $this->db->where('user_id', $id);
            $this->db->update('users');
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }

    function potong_saldo_smm($id, $nominal)
    {
        try {
            $data_member = $this->db->get_where('users', ['user_id' => $id])->row_array();

            $data_balance_history = array(
                'user_id' => $id,
                'tanggal_waktu' => date("Y-m-d H:i:s"),
                'saldo_sebelum' => $data_member['saldo'],
                'saldo_sesudah' => $data_member['saldo'] - $nominal
            );
            $this->db->insert('balancehistory', $data_balance_history);

            $this->db->set('saldo', 'saldo-' . $nominal, FALSE);
            $this->db->where('user_id', $id);
            $this->db->update('users');
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }


    function get_count_trx_by_ses($tipe)
    {
        try {
            $res = $this->get_user_by_ses();
            if ($tipe == "Success") {
                $this->db->select('COUNT(*) as total');
                $this->db->where('status', "Success");
                $this->db->where('user_id', $res['user_id']);
                return $this->db->get('transaction')->row_array();
            } else if ($tipe == "Pending") {
                $this->db->select('COUNT(*) as total');
                $this->db->where('status', "Pending");
                $this->db->where('user_id', $res['user_id']);
                return $this->db->get('transaction')->row_array();
            } else if ($tipe == "Processing") {
                $this->db->select('COUNT(*) as total');
                $this->db->where('status', "Processing");
                $this->db->where('user_id', $res['user_id']);
                return $this->db->get('transaction')->row_array();
            } else if ($tipe == "Partial") {
                $this->db->select('COUNT(*) as total');
                $this->db->where('status', "Partial");
                $this->db->where('user_id', $res['user_id']);
                return $this->db->get('transaction')->row_array();
            } else if ($tipe == "In progress") {
                $this->db->select('COUNT(*) as total');
                $this->db->where('status', "In progress");
                $this->db->where('user_id', $res['user_id']);
                return $this->db->get('transaction')->row_array();
            } else if ($tipe == "Cancel") {
                $this->db->select('COUNT(*) as total');
                $this->db->where('status', "Cancel");
                $this->db->where('user_id', $res['user_id']);
                return $this->db->get('transaction')->row_array();
            } else if ($tipe == "Error") {
                $this->db->select('COUNT(*) as total');
                $this->db->where('status', "Error");
                $this->db->where('user_id', $res['user_id']);
                return $this->db->get('transaction')->row_array();
            } else {
                $this->db->select('COUNT(*) as total');
                $this->db->where('user_id', $res['user_id']);
                return $this->db->get('transaction')->row_array();
            }
        } catch (Exception $e) {
            $this->session->unset_userdata(array('user' => ''));
            $this->session->sess_destroy();
            $this->M_log->show_msg("error", "Error System !");
            $this->GZL->log_in("M_member", "get_count_trx_by_ses", $e->getMessage());
            redirect(base_url());
        }
    }

    function get_data_depo_by_ses()
    {
        try {
            $res = $this->get_user_by_ses();
            $this->db->where('user_id', $res['user_id']);
            $this->db->where('status', "Pending");
            $this->db->order_by('tanggal_deposit', 'desc');
            $cek_depo = $this->db->get('deposits', 1);
            return $cek_depo;
        } catch (\Throwable $th) {
            $this->session->unset_userdata(array('user' => ''));
            $this->session->sess_destroy();
            $this->M_log->show_msg("error", "Error System !");
            $this->GZL->log_in("M_member", "get_data_depo_by_ses", $th->getMessage());
            redirect(base_url());
        }
    }

    function get_user_by_ses()
    {
        try {
            if ($this->session->userdata('user') == "") {
                $this->session->unset_userdata(array('user' => ''));
                $this->session->sess_destroy();
                $this->M_log->show_msg("error", "Error System !");
                redirect(base_url());
            } else {
                $this->db->where('username', $this->session->userdata('user'));
                $res = $this->db->get('users', 1);
                if ($res->num_rows() > 0) {
                    return $res->row_array();
                } else {
                    $this->session->unset_userdata(array('user' => ''));
                    $this->session->sess_destroy();
                    $this->M_log->show_msg("error", "Error System !");
                    redirect(base_url());
                }
            }
        } catch (Exception $e) {
            $this->session->unset_userdata(array('user' => ''));
            $this->session->sess_destroy();
            $this->M_log->show_msg("error", "Error System !");
            $this->GZL->log_in("M_member", "get_user_by_ses", $e->getMessage());
            redirect(base_url());
        }
    }

    function get_tot_smm_by_ses()
    {
        try {
            $res = $this->get_user_by_ses();
            $this->db->where('user_id', $res['user_id']);
            $this->db->select_sum('price');
            $this->db->where_in('status', array("Pending", "Processing", "Partial", "In progress", "Success"));
            $tot_pesan_smm = $this->db->get('transaction')->row_array();
            return $tot_pesan_smm;
        } catch (Exception $e) {
            $this->session->unset_userdata(array('user' => ''));
            $this->session->sess_destroy();
            $this->M_log->show_msg("error", "Error System !");
            $this->GZL->log_in("M_member", "get_count_trx_by_ses", $e->getMessage());
            redirect(base_url());
        }
    }

    function get_tot_depo_by_ses()
    {
        $res = $this->get_user_by_ses();
        $this->db->where('user_id', $res['user_id']);
        $this->db->select_sum('jumlah_didapat');
        $this->db->where('status', "Success");
        $tot_depo = $this->db->get('deposits')->row_array();
        return $tot_depo;
    }
}

/* End of file M_member.php */
