<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_member extends CI_Model
{

    function get_data_depo_by_ses()
    {
        $res = $this->get_user_by_ses();
        $this->db->where('username', $res['username']);
        $this->db->where('status', "Pending");
        $this->db->order_by('date_depo', 'desc');
        $cek_depo = $this->db->get('t_deposit', 1);
        return $cek_depo;
    }

    function get_user_by_ses()
    {
        $this->db->where('username', $this->session->userdata('user'));
        $res = $this->db->get('t_member', 1)->row_array();
        return $res;
    }

    function get_tot_smm_by_ses()
    {
        $res = $this->get_user_by_ses();
        $this->db->where('id_member', $res['id_member']);
        $this->db->select_sum('price');
        $this->db->where_in('status', array("Pending", "Processing", "Partial", "In progress", "Success"));
        $tot_pesan_smm = $this->db->get('t_sosmed_order')->row_array();
        return $tot_pesan_smm;
    }

    function get_tot_depo_by_ses()
    {
        $res = $this->get_user_by_ses();
        $this->db->where('username', $res['username']);
        $this->db->select_sum('jumlah_transfer');
        $this->db->where('status', "Success");
        $tot_depo = $this->db->get('t_deposit')->row_array();
        return $tot_depo;
    }
}

/* End of file M_member.php */
