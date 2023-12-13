<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_monitoring extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('user') == '' or $this->session->userdata('user') == null) {
            redirect('auth');
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
            // $this->db->order_by($order, $by);
            // $this->db->order_by($column_order[$this->input->post('order')['0']['column']], $this->input->post('order')['0']['dir']);
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

        $this->_get_datatables_query($tabel, $order, $by);
        if ($this->input->post('length') != -1)
            $this->db->limit($this->input->post('length'), $this->input->post('start'));
        $this->db->order_by($order, $by);
        $query = $this->db->get();
        return $query->result();
    }


    function count_filtered($tabel, $order, $by)
    {
        $this->_get_datatables_query($tabel, $order, $by);
        $this->db->order_by($order, $by);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all($table)
    {
        $this->db->from($table);
        return $this->db->count_all_results();
    }
    //////////////////////////////////////////////////////////////////////////////////////////
}

/* End of file M_monitoring.php */
