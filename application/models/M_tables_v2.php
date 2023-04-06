<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_tables_v2 extends CI_Model
{
    private function _get_datatables_query($table, $order, $by, $where = array(), $or_where = array(), $where_in = array())
    {

        $res_db = $this->db->query("DESCRIBE " . $table . "")->result();
        $colum_search = array();
        $column_order = array();
        $order = array($order => $by);

        foreach ($res_db as $key) {
            $column_order[] = $key->Field;
            $colum_search[] = $key->Field;
        }

        $this->db->from($table);
        $i = 0;
            foreach ($colum_search as $item) {
            if ($this->input->post('search')['value']) {
                if ($i === 0) {
                    $this->db->group_start();
                    $this->db->like($item, $this->input->post('search')['value'], 'both');
                } else {
                    $this->db->or_like($item, $this->input->post('search')['value'], 'both');
                }
                if (count($colum_search) - 1 == $i)
                    $this->db->group_end();
            }
            $i++;
        }

        if (!empty($where)) {
            $this->db->where($where);
        }

        if (!empty($or_where)) {
            $this->db->or_where($or_where);
        }

        if (!empty($where_in)) {
            foreach ($where_in as $column => $array_values) {
                $this->db->where_in($column, $array_values);
            }
        }

        if ($this->input->post('order')) {
            $this->db->order_by($column_order[$this->input->post('order')['0']['column']], $this->input->post('order')['0']['dir']);
        } else if (isset($this->order)) {
            // $order = $order;
            // $this->db->order_by(key($order), $order[key($order)]);
            $this->db->order_by($order, $by);
        }
    }

    function get_datatables($tabel, $order, $by, $where = array(), $or_where = array(), $where_in = array())
    {
        $this->_get_datatables_query($tabel, $order, $by, $where, $or_where, $where_in);
        if ($this->input->post('length') != -1)
            $this->db->limit($this->input->post('length'), $this->input->post('start'));
        $this->db->order_by($order, $by);
        $query = $this->db->get();
        return $query->result();
    }

    function count_filtered(
        $tabel,
        $order,
        $by,
        $where = array(),
        $or_where = array(),
        $where_in = array()
    ) {
        $this->_get_datatables_query($tabel, $order, $by, $where, $or_where, $where_in);
        $this->db->order_by($order, $by);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all($table, $order, $by, $where = array(), $or_where = array(), $where_in = array())
    {
        if (!empty($where)) {
            $this->db->where($where);
        }

        if (!empty($or_where)) {
            $this->db->or_where($or_where);
        }

        if (!empty($where_in)) {
            foreach ($where_in as $column => $array_values) {
                $this->db->where_in($column, $array_values);
            }
        }
        $this->db->from($table);
        return $this->db->count_all_results();
    }
}

/* End of file M_tables_v2.php */
