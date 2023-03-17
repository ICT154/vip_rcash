<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_log');
        $this->load->model('M_gzl');
    }


    function index()
    {
        if ($this->session->userdata('user') != '') {
            redirect('dashboard');
        }
        $data = array('title' => "RCASH | LOGIN",);
        $this->load->view('layout_outside/page_login', $data);
    }

    function register()
    {
        if ($this->session->userdata('user') != '') {
            redirect('dashboard');
        }
        $data = array('title' => "RCASH | REGISTER",);
        $this->load->view('layout_outside/page_register', $data);
    }

    function register_ex()
    {
        if (htmlspecialchars($this->input->post('username_regist'))) {


            ////////////// CEK USERNAME EXIST /////////////////////
            $this->db->where('username', htmlspecialchars($this->input->post('username_regist')));
            $cek = $this->db->get('t_member', 1);
            if ($cek->num_rows() > 0) {
                $this->M_log->show_msg("error", "Username Telah Terpakai, Ganti Username Lain");
                redirect(base_url());
            } else {
                $this->db->where('email', htmlspecialchars($this->input->post('email_regist')));
                $cek = $this->db->get('t_member', 1);
                if ($cek->num_rows() > 0) {
                    $this->M_log->show_msg("error", "Email Telah Terpakai, Ganti Email Lain");
                    redirect(base_url());
                } else {
                    $password = htmlspecialchars($this->input->post('password_regist'));

                    // Validate password strength
                    $uppercase = preg_match('@[A-Z]@', $password);
                    $lowercase = preg_match('@[a-z]@', $password);
                    $number    = preg_match('@[0-9]@', $password);
                    $specialChars = preg_match('@[^\w]@', $password);

                    if (!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {

                        $this->M_log->show_msg("error", "Kata sandi harus setidaknya 8 karakter dan harus mencakup setidaknya satu huruf besar, satu angka, dan satu karakter khusus.");
                        redirect(base_url());
                    } else {
                        $data = array(
                            'id_member' => "RMEM" . rand() . "PAY",
                            'username' => htmlspecialchars($this->input->post('username_regist')),
                            'password' => $this->M_gzl->encode($this->input->post('password_regist')),
                            'email' => htmlspecialchars($this->input->post('email_regist')),
                            'status' => "0",
                            'status_ket' => "Under Maintenance",
                            'verif' => "0",
                            'level' => "premium",
                            'register' => date("Y-m-d H:i:s")
                        );
                        $this->db->insert('t_member', $data);


                        if ($this->db->affected_rows() > 0) {

                            $this->M_log->show_msg("success", "Pendaftaran Berhasil");
                            redirect(base_url());
                        } else {
                            $this->M_log->show_msg("error", "Error System !");
                            redirect(base_url());
                        }
                    }
                }
            }
        } else {

            $this->M_log->show_msg("error", "Tolong Isi Dengan Benar !");
            redirect(base_url());
        }
    }


    function main($id = "")
    {
        if ($this->session->userdata('user') != '') {
            redirect('dash');
        }
        if ($id == "") {
            redirect(base_url("auth"));
        } else {

            $data_usr = base64_decode($id);
            $data_usr_exp = explode("-", $data_usr);


            $user = $data_usr_exp['0'];
            $password = $data_usr_exp['1'];
            // $this->db->where('username', $user);
            // $this->db->where('pass', old_password($password));

            echo $password;

            $sql = "SELECT * FROM t_admm WHERE username='" . $user . "' AND pass='" . $password  . "' LIMIT 1";
            $cek_log = $this->db->query($sql);

            // echo $sql;

            if ($cek_log->num_rows() > 0) {
                $data = [
                    'user' => $user
                ];
                $this->session->set_userdata($data);

                // $this->M_log->log_sitk($user, "login");
                // $this->M_log->log_in_auth('SUKSES LOGIN', $user, $password);
                // $this->updt_last_log($user);

                $this->session->set_flashdata('message', '<script>toastr["success"]("Welcome to Dashboard BLUD UPTD PALD KOTA BEKASI ' . $user . ' Have A Nice Day :) ")
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
                redirect('dash');
            } else {
                $this->session->set_flashdata('message', '<script>toastr["error"]("Your Username or Password is wrong, please try again")
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

                redirect('auth');
            }
        }
    }






    function error()
    {
        $this->load->view('layout_outside/404');
    }

    function updt_last_log($username)
    {
        $data = array(
            'last_log' => date("Y-m-d H:i:s"),
        );
        $this->db->where('username', $username);
        $this->db->update('t_admin', $data);
    }


    function login()
    {
        if ($this->session->userdata('user') != '') {
            redirect('dashboard');
        }
        if (htmlspecialchars($this->input->post('email_username_login'))) {

            $this->db->where('username', "'" . htmlspecialchars($this->input->post('email_username_login')) . "'", FALSE);
            $this->db->or_where('email',  htmlspecialchars($this->input->post('email_username_login')));
            $cek_usrname = $this->db->get('t_member', 1);
            if ($cek_usrname->num_rows() > 0) {
                $data = $cek_usrname->row_array();

                $pass = $this->input->post('password_login');
                $pass_db = $this->M_gzl->decode($data['password']);


                if ($pass == $pass_db) {
                    if ($data['status'] == 1) {
                        $this->session->set_flashdata('message_login', "<div class='alert alert-danger'>Akun Anda Tidak Aktif <br> Ket : " . $data['status_ket'] . " </div>");
                        $this->M_log->show_msg("error", "Akun Anda Tidak Aktif !");
                        redirect(base_url());
                    } else {
                        if ($data['verif'] == 1) {
                            $this->session->set_flashdata('message_login', "<div class='alert alert-danger'>Akun Anda Tidak Aktif <br> Ket : " . $data['status_ket'] . " </div>");
                            $this->M_log->show_msg("error", "Akun Anda Tidak Aktif, Harap Verifikasi Akun Anda !");
                            redirect(base_url());
                        } else {
                            $data = [
                                'user' => $data['username']
                            ];
                            $this->session->set_userdata($data);
                            $this->session->set_flashdata('message_login', "<div class='alert alert-success'>Terima Kasih Telah Mendaftar, Silahkan Tunggu Sampai Maintenance Selesai</div>");
                            $this->M_log->show_msg("success", "Terima Kasih Telah Mendaftar, Silahkan Tunggu Sampai Maintenance Selesai !");
                            redirect(base_url());
                        }
                    }
                } else {
                    $this->session->set_flashdata('message_login', "<div class='alert alert-danger'>Password Salah !</div>");
                    $this->M_log->show_msg("error", "Password Salah !");
                    redirect(base_url());
                }
            } else {
                $this->session->set_flashdata('message_login', "<div class='alert alert-danger'>Username / Email Tidak Terdaftar !</div>");
                $this->M_log->show_msg("error", "Username / Email Tidak Terdaftar !");
                redirect(base_url());
            }
        } else {
            $this->session->set_flashdata('message_login', "<div class='alert alert-danger'>Tolong Isi Dengan Benar !</div>");
            $this->M_log->show_msg("error", "Tolong Isi Dengan Benar !");
            redirect(base_url());
        }
    }

    function hash($string)
    {
        return hash('sha512', $string . config_item('encryption_key'));
    }
}

/* End of file Auth.php */