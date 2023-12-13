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

    function getTopTransactionUsers($tanggal_awal, $tanggal_akhir, $limit = 5)
    {
        $this->db->select('u.user_id, u.username, u.nama_lengkap, COUNT(t.transaction_id) as total_transactions, SUM(t.price) as total_price');
        $this->db->from('transaction t');
        $this->db->join('users u', 't.user_id = u.user_id');
        $this->db->where('t.status', 'Success');
        // $this->db->where('t.transaction_date >=', $tanggal_awal);
        // $this->db->where('t.transaction_date <=', $tanggal_akhir);
        $this->db->group_by('u.user_id');
        $this->db->order_by('total_transactions', 'DESC');
        $this->db->limit($limit);

        $query = $this->db->get();

        return $query->result();
    }

    function getTopDepositUsers($tanggal_awal, $tanggal_akhir)
    {
        $this->db->select('u.user_id, u.username, u.nama_lengkap, SUM(d.jumlah) as total_deposit');
        $this->db->from('deposits d');
        $this->db->join('users u', 'd.user_id = u.user_id');
        $this->db->where('d.status', 'Success');
        $this->db->where('d.tipe_deposit', "SMM");
        // $this->db->where('d.tanggal_deposit >=', $tanggal_awal);
        // $this->db->where('d.tanggal_deposit <=', $tanggal_akhir);
        $this->db->group_by('u.user_id');
        $this->db->order_by('total_deposit', 'DESC');
        $this->db->limit(5);

        $query = $this->db->get();

        return $query->result();
    }

    function calculateDepositBonus($deposit_amount, $bonus_percentage, $admin_fee_percentage)
    {
        /**
         * Menghitung bonus deposit berdasarkan persentasi.
         *
         * Parameters:
         *     $deposit_amount (float): Jumlah deposit awal.
         *     $bonus_percentage (float): Persentase bonus deposit.
         *     $admin_fee_percentage (float): Persentase biaya admin.
         *
         * Returns:
         *     array: Array berisi (bonus, total_deposit).
         */
        $bonus = $deposit_amount * ($bonus_percentage / 100);
        $admin_fee = $deposit_amount * ($admin_fee_percentage / 100);
        $total_deposit = $deposit_amount + $bonus - $admin_fee;
        return array('bonus' => $bonus, 'admin_fee' => $admin_fee, 'total_deposit' => $total_deposit);
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

    function save_data_v2($nominal, $metode, $tipe)
    {
        try {
            $res = $this->member->get_user_by_ses();
            $nominal = str_replace(",", "", $nominal);
            $depo = $this->get_data_methode($metode);


            if ($tipe == "SMM") {
                $cek_depo_nominal = $this->calculateDepositBonus($nominal, $depo['bonus_deposit_smm'], $depo['rate']);
                $jumlah_didapat = $cek_depo_nominal['total_deposit'];
            } else if ($tipe == "PPOB") {
                $cek_depo_nominal = $this->calculateDepositBonus($nominal, $depo['bonus_deposit_ppob'], $depo['rate']);
                $jumlah_didapat = $cek_depo_nominal['total_deposit'];
            }

            $data = array(
                'deposit_id' => $this->generate_depo_code(),
                'user_id' => $res['user_id'],
                'payment_method_id' => $depo['payment_method_id'],
                'tanggal_deposit' => date("Y-m-d H:i:s"),
                'jumlah' => $nominal + rand(0, 999),
                "jumlah_didapat" => $jumlah_didapat,
                "status" => "Pending",
                "tipe_deposit" => $tipe,
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
