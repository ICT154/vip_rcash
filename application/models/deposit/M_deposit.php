<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_deposit extends CI_Model
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_member', "member");
        $this->load->model('M_log');
    }

    function cek_bukti($id)
    {
        try {
            $id = $this->db->escape_str($id);
            $this->db->where('deposit_id', $id);
            $this->db->where_not_in('bukti_tf', ['']);
            $res = $this->db->get_where('deposits', ['deposit_id' => $id])->row_array();
            return $res;
        } catch (Exception $e) {
            $this->M_log->log_in($e->getMessage(), "cek_bukti", "");
            $this->M_log->show_msg("Anda tidak memiliki akses ke halaman ini", "danger", "warning");
            redirect(base_url());
        }
    }

    function send_bukti_tf($id, $bukti_tf)
    {
        try {
            $this->db->where('deposit_id', $id);
            $this->db->update('deposits', array('bukti_tf' => $bukti_tf));
            if ($this->db->affected_rows() > 0) {
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
            $this->M_log->log_in($e->getMessage(), "send_bukti_tf", "");
            $this->M_log->show_msg("Anda tidak memiliki akses ke halaman ini", "danger", "warning");
            redirect(base_url());
        }
    }


    function batalkan_deposit($id)
    {
        try {
            $this->db->where('deposit_id', $id);
            $this->db->update('deposits', array('status' => 'Error'));
            if ($this->db->affected_rows() > 0) {
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
            $this->M_log->log_in($e->getMessage(), "batalkan_deposit", "");
            $this->M_log->show_msg("Anda tidak memiliki akses ke halaman ini", "danger", "warning");
            redirect(base_url());
        }
    }

    function get_deposit_by_id($id)
    {
        $this->db->where('deposit_id', $id);
        $res = $this->db->get('deposits', 1)->num_rows();
        return $res;
    }


    function get_method_depo($id)
    {
        try {
            $this->db->where('payment_method_id', $id);
            $res = $this->db->get('paymentmethod', 1)->row_array();
            return $res;
        } catch (Exception $e) {
            $this->M_log->log_in($e->getMessage(), "get_method_depo", "");
            $this->M_log->show_msg("Anda tidak memiliki akses ke halaman ini", "danger", "warning");
            redirect(base_url());
        }
    }


    function get_user_by_ses()
    {
        $this->db->where('username', $this->session->userdata('user'));
        $res = $this->db->get('t_member', 1)->row_array();
        return $res;
    }

    function save_data($nominal, $metode)
    {
        try {
            $res = $this->member->get_user_by_ses();
            $nominal = str_replace(",", "", $nominal);
            $depo = $this->get_data_methode($metode);

            $data = array(
                'deposit_id' => $this->generate_depo_code(),
                'user_id' => $res['user_id'],
                'payment_method_id' => $depo['payment_method_id'],
                'tanggal_deposit' => date("Y-m-d H:i:s"),
                'jumlah' => $nominal + rand(0, 999),
                "jumlah_didapat" => $nominal,
                "status" => "Pending",
                // "tanggal_update"=>
                'ip' => $this->input->ip_address(),
                "device" => $this->input->user_agent(),
            );
            $this->db->insert('deposits', $data);
            if ($this->db->affected_rows() > 0) {
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
            $this->session->unset_userdata(array('user' => ''));
            $this->session->sess_destroy();
            $this->M_log->show_msg("error", "Error System !");
            $this->GZL->log_in("M_deposit", "save_data", $e->getMessage());
            redirect(base_url());
        }
    }

    function get_data_methode($id)
    {
        $this->db->where('payment_method_id', $id);
        $cek = $this->db->get('paymentmethod', 1)->row_array();
        return $cek;
    }


    function cek_depo_methode($id)
    {
        $this->db->where('payment_method_id', $id);
        $cek = $this->db->get('paymentmethod', 1)->num_rows();

        if ($cek > 0) {
            return true;
        } else {
            return false;
        }
    }

    function get_depo_methode()
    {
        return $this->db->get('paymentmethod');
    }

    function generate_depo_code($length = 6, $kode = 'R')
    {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $code = '';
        for ($i = 0; $i < $length; $i++) {
            $code .= $characters[random_int(0, strlen($characters) - 1)];
        }
        return "$kode" . $code;
    }
}

/* End of file M_deposit.php */
