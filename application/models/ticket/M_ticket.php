<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_ticket extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('member/M_member', "member");
        $this->load->model('M_gzl', 'GZL');
    }

    function get_tiket_limit($id)
    {
        $this->db->where('transaction_id', $id);
        $query = $this->db->get('ticket', 1);
        if ($query->num_rows() > 0) {
            return $query->row_array();
        } else {
            return false;
        }
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

    function get_tiket_by_id($id)
    {
        $this->db->select('*');
        $this->db->from('ticket');
        $this->db->where('id_tickets', $id);
        $query = $this->db->get();
        return $query->row_array();
    }

    function get_last_tanggal($id)
    {
        $this->db->select('date_g');
        $this->db->from('ticket');
        $this->db->where('user_id', $id);
        $this->db->order_by('date_g', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get();
        return $query->row_array();
    }

    function komplain_smm($id_pesanan, $komplain)
    {
        $usr = $this->member->get_user_by_ses();
        $data = array(
            'id_tickets' => "#" . $this->GZL->gen_code(6, "RTICK"),
            'subjek' => "Komplain Pesanan",
            'tipe' => "Komplain",
            'pesan' => $komplain,
            'user_id' => $usr['user_id'],
            'date_g' => date("Y-m-d H:i:s"),
            'status' => '0',
            'transaction_id' => $id_pesanan
        );
        $this->db->insert('ticket', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    function send_ticket($tiket, $tipe_tiket, $pesan_tiket)
    {
        $usr = $this->member->get_user_by_ses();

        try {
            $data = array(
                'id_tickets' => "#" . $this->GZL->gen_code(6, "RTICK"),
                'subjek' => $tiket,
                'tipe' => $tipe_tiket,
                'pesan' => $pesan_tiket,
                'user_id' => $usr['user_id'],
                'date_g' => date("Y-m-d H:i:s"),
                'status' => '0',
            );
            $this->db->insert('ticket', $data);
            if ($this->db->affected_rows() > 0) {
                return true;
            } else {
                return false;
            }
        } catch (\Throwable $th) {
            return false;
        }
    }
}

/* End of file M_ticket.php */
