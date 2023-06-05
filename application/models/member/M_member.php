<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_member extends CI_Model
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_gzl', 'GZL');
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
