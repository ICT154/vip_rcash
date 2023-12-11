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

    function send_ticket_reply($id_tiket, $pesan)
    {
        $usr = $this->member->get_user_by_ses();

        $data = array(
            "id_tickets" => $id_tiket,
            "pesan" => $pesan,
            "user_id" => $usr['user_id'],
            "date_g" => date("Y-m-d H:i:s"),
            "status" => "0"
        );

        $this->db->insert('ticket', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    function get_tiket_result($id)
    {
        $this->db->select('*');
        $this->db->from('ticket');
        $this->db->where('id_tickets', $id);
        $this->db->order_by('date_g', 'asc');
        $query = $this->db->get();
        return $query->result();
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

        if ($query->num_rows() > 0) {
            return $query->row_array();
        } else {
            return false;
        }
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



    ///////////////////////////////////// TABLE TIKET /////////////////////////////////////////
    function get_column($tabel)
    {
        $res_db = $this->db->query("DESCRIBE $tabel")->result();
        $colum_search = array();
        $column_order = array();
        foreach ($res_db as $key) {
            $column_order[] = $key->Field;
            $colum_search[] = $key->Field;
        }
        return $colum_search;
        // return $column_order;
    }

    private function _get_datatables_query($table, $order, $by)
    {
        // $this->db->order_by($order, $by);
        $res_db = $this->db->query("DESCRIBE " . $table . "")->result();
        $colum_search = array();
        $column_order = array();
        $order = array($order => $by);

        foreach ($res_db as $key) {
            $column_order[] = $key->Field;
            $colum_search[] = $key->Field;
        }

        // $this->db->order_by($order, $by);
        $this->db->from($table);
        $i = 0;
        foreach ($colum_search as $item) // loop kolom 
        {
            if ($this->input->post('search')['value']) // jika datatable mengirim POST untuk search
            {
                if ($i === 0) // looping pertama
                {
                    $this->db->group_start();
                    $this->db->like($item, $this->input->post('search')['value']);
                } else {
                    $this->db->or_like($item, $this->input->post('search')['value']);
                }
                if (count($colum_search) - 1 == $i) //looping terakhir
                    $this->db->group_end();
            }
            $i++;
        }

        // jika datatable mengirim POST untuk order
        if ($this->input->post('order')) {
            $this->db->order_by($column_order[$this->input->post('order')['0']['column']], $this->input->post('order')['0']['dir']);
        } else if (isset($this->order)) {
            // $order = $order;
            // $this->db->order_by(key($order), $order[key($order)]);
            // $this->db->order_by($order, $by);
            // } else {
            // $this->db->order_by($order, $by);
            // }
        }
    }


    function get_datatables($tabel, $order, $by)
    {
        $user = $this->member->get_user_by_ses();
        $this->_get_datatables_query($tabel, $order, $by);
        if ($this->input->post('length') != -1)
            $this->db->limit($this->input->post('length'), $this->input->post('start'));
        $this->db->order_by($order, $by);
        $this->db->where('user_id', $user['user_id']);
        $this->db->where('is_admin !=', "Y");
        $this->db->group_by("id_tickets");
        $query = $this->db->get();
        return $query->result();
    }


    function count_filtered($tabel, $order, $by)
    {
        $user = $this->member->get_user_by_ses();
        $this->_get_datatables_query($tabel, $order, $by);
        $this->db->where('user_id', $user['user_id']);
        $this->db->where('is_admin !=', "Y");
        $this->db->group_by("id_tickets");
        $this->db->order_by($order, $by);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all($table)
    {
        $user = $this->member->get_user_by_ses();
        $this->db->where('user_id', $user['user_id']);
        $this->db->group_by("id_tickets");
        $this->db->where('is_admin !=', "Y");
        $this->db->from($table);
        return $this->db->count_all_results();
    }
    //////////////////////////////////////////////////////////////////////////////////////////
}

/* End of file M_ticket.php */
