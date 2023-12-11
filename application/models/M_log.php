<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_log extends CI_Model
{

    function log_history($user_id)
    {
        $data = array(
            'user_id' => $user_id,
            'tanggal_login' => date("Y-m-d H:i:s"),
            'browser' => $_SERVER['HTTP_USER_AGENT'],
            'ip_address' => $_SERVER['REMOTE_ADDR'],
        );
        $this->db->insert('loginhistory', $data);
    }

    function log_usr($user_id, $log_name)
    {
        $data = array(
            "user_id" => $user_id,
            "aktivitas" => "--+ " . $log_name . " +--",
            "tanggal_waktu" => date("Y-m-d H:i:s")
        );
        $this->db->insert("useractivity", $data);
    }

    function log_sitk($username, $log_name)
    {
        $data = array(
            'id_log' => $this->get_last_log(),
            'time' => date("Y-m-d h:i:s"),
            'username' => $username,
            'ip' => $_SERVER['REMOTE_ADDR'],
            'log_name' => $log_name,
        );
        $this->db->insert('t_loghistory', $data);
    }


    function get_last_log()
    {
        $this->db->order_by('time', 'desc');
        $res = $this->db->get('t_loghistory', 1)->row_array();

        $last_log = $res['id_log'] + 1;
        return $last_log;
    }


    function check_akses($modul, $hak)
    {
        $usr = $this->session->userdata('user');

        $res = $this->db->get_where("t_admin_modul", array("username" => $usr, "modul" => $modul), 1)->row_array();
        $akses = $res['akses'];

        if (strpos($akses, $hak) !== false) {
        } else {
            $this->M_log->log_in("AKSES DI BLOKIR  " .   $usr . "");
            $this->M_log->show_msg("error", "AKSES DITOLAK !!!");
            redirect(base_url("dash/error_akses"));
        }
    }

    function check_akses_ajx($modul, $hak)
    {
        $usr = $this->session->userdata('user');

        $res = $this->db->get_where("t_admin_modul", array("username" => $usr, "modul" => $modul), 1)->row_array();
        $akses = $res['akses'];

        if (strpos($akses, $hak) !== false) {
        } else {
            $this->M_log->log_in("AKSES DI BLOKIR  " .   $usr . "");
            $this->M_log->show_msg("error", "AKSES DITOLAK !!!");
            $this->M_log->redirect(base_url("dash/error_akses"));
            // redirect(base_url("dash/error_akses"));
        }
    }





    function redirect($loc)
    {
        echo "<script>window.location='" . $loc . "'</script>";
    }


    function show_msg($tipe, $msg)
    {
        $this->session->set_flashdata('message', '<script>toastr["' . $tipe . '"]("' . $msg . '")
                toastr.options = {
                    "closeButton": false,
                    "debug": false,
                    "newestOnTop": true,
                    "progressBar": true,
                    "positionClass": "toast-top-right",
                    "preventDuplicates": true,
                    "onclick": null,
                    "showDuration": 300,
                    "hideDuration": 100,
                    "timeOut": 5000,
                    "extendedTimeOut": 1000,
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                  }</script>');
    }

    function log_in($ngapain = "", $tipe = "", $pesan = "")
    {
        // $data = array(
        //     'id_log' => "LOG" . rand() . "",
        //     'log_name' => strtoupper($ngapain) . "|" . $tipe . "|" . $pesan,
        //     'username' => $this->session->userdata('user'),
        //     'ip' => $_SERVER['REMOTE_ADDR'],
        //     'device' => $_SERVER['HTTP_USER_AGENT'],
        //     'time' => date("Y-m-d H:i:s"),
        // );
        // $this->db->insert('t_log_history', $data);

        $data = array(
            'log_type' => $tipe,
            'log_message' => $ngapain,
            'log_timestamp' => date("Y-m-d H:i:s"),
            'ip' => $_SERVER['REMOTE_ADDR'],
            'device' => $_SERVER['HTTP_USER_AGENT'],
        );
        $this->db->insert('systemlog', $data);
    }

    function log_in_auth($ngapain, $user, $pass)
    {
        $data = array(
            'id_log' => "LOG" . rand() . "",
            'log_name' => $ngapain,
            'username' => "$user | $pass",
            'ip' => $_SERVER['REMOTE_ADDR'],
            'device' => $_SERVER['HTTP_USER_AGENT'],
            'time' => date("Y-m-d H:i:s"),
        );
        $this->db->insert('t_log_history', $data);
    }
}

/* End of file ModelName.php */