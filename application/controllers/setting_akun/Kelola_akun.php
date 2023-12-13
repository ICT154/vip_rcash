<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Kelola_akun extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('user') == '' or $this->session->userdata('user') == null) {
            redirect('auth');
        }
        $this->load->model('member/M_member', "member");
        $this->load->model('M_log');
        $this->load->model('M_gzl', 'GZL');
        $this->load->model('deposit/M_deposit', 'deposit');
    }

    function save_profile_edit_api_key()
    {
        $this->load->helper('security');
        $data_user = $this->member->get_user_by_ses();

        $data_for_api_key = array(
            'user_id' => $data_user['user_id'],
            'username' => $data_user['username'],
            'email' => $data_user['email'],
        );

        $json_data = json_encode($data_for_api_key);

        // Buat API key menggunakan fungsi hash
        $api_key = hash('sha256', $json_data);

        $data = array(
            'api_key' => $api_key
        );

        $this->db->where('username', $this->session->userdata('user'));
        $this->db->update('users', $data);

        $this->M_log->show_msg("success", "API Key Berhasil Diubah");
        $this->M_log->log_in("Mengubah API Key " . $this->session->userdata('user') . "", "users", $this->session->userdata('user'));
        redirect('kelola-akun');
    }

    function save_profile_edit_password()
    {
        $password_lama = $this->input->post('password_lama');
        $password_baru = $this->input->post('password_baru');
        $password_baru_konfirmasi = $this->input->post('password_baru_konfirmasi');

        $cek_password = $this->db->get_where('users', array('username' => $this->session->userdata('user')))->row_array();

        if ($this->GZL->enkrip($password_lama) ==  $cek_password['password']) {
            if ($password_baru == $password_baru_konfirmasi) {
                $data = array(
                    'password' => $this->GZL->enkrip($password_baru)
                );

                $this->db->where('username', $this->session->userdata('user'));
                $this->db->update('users', $data);

                $this->M_log->show_msg("success", "Password Berhasil Diubah");
                $this->M_log->log_in("Mengubah Password $this->session->userdata('user')", "users", $this->session->userdata('user'));
                redirect('kelola-akun');
            } else {
                $this->M_log->show_msg("error", "Password Baru Tidak Sama");
                $this->M_log->log_in("Mengubah Password Baru Tidak Sama", "users", $this->session->userdata('user'));
                redirect('kelola-akun');
            }
        } else {
            $this->M_log->show_msg("error", "Password Lama Salah");
            $this->M_log->log_in("Mengubah Password Lama Salah", "users", $this->session->userdata('user'));
            redirect('kelola-akun');
        }
    }

    public function index()
    {
        $data = array(
            'user' => $this->member->get_user_by_ses(),
            'sidebar_one' => "RCASH",
            'sidebar_two' => "KELOLA AKUN",
            'breadcrumb' => "",
            'icon_subheader' => "subheader-icon fal fa-user-cog",
            'bc_1' => "KELOLA AKUN",
            'bc_2' => "Dibawah ini merupakan halaman pengaturan akun anda. Silahkan ubah data yang ingin diubah dan klik tombol simpan untuk menyimpan perubahan.",
            'title' => "RCASH | KELOLA AKUN",
        );

        $this->load->view('templates/header', $data);
        $this->load->view('member/kelola_akun/index');
        $this->load->view('templates/footer');
        $this->load->view('member/kelola_akun/index-js');
    }

    function save_profile_edit()
    {

        $config['upload_path'] = "storage/uploads_photo_profile/"; //path folder file upload
        $config['allowed_types'] = 'gif|jpg|png'; //type file yang boleh di upload
        $config['encrypt_name'] = TRUE; //enkripsi file name upload

        $this->load->library('upload', $config); //call library upload 

        if ($this->upload->do_upload("foto_profile_xxx")) { //upload file
            $data = array('upload_data' => $this->upload->data()); //ambil file name yang diupload

            // $judul = $this->input->post('judul'); //get judul image
            // $image = $data['upload_data']['file_name']; //set file name ke variable image

            // $result = $this->m_upload->simpan_upload($judul, $image); //kirim value ke model m_upload

            $data = $this->upload->data();
            $imagename = $data['file_name'];
            $data = array(
                'nama_lengkap' => $this->input->post('nama_lengkap'),
                'nomer_hp' => $this->input->post('no_telp'),
                'profile_photo' =>  $imagename
            );

            $this->db->where('username', $this->session->userdata('user'));
            $this->db->update('users', $data);

            $this->M_log->show_msg("success", "Data Profile & Foto Berhasil Diubah");
            $this->M_log->log_in("Mengubah Data Profile & Foto", "users", $this->session->userdata('user'));
            redirect('kelola-akun');
        } else {
            // $this->M_log->show_msg("error", "Data Profile Gagal Diubah" . $this->upload->display_errors());
            $data = array(
                'nama_lengkap' => $this->input->post('nama_lengkap'),
                'nomer_hp' => $this->input->post('no_telp'),
            );

            $this->db->where('username', $this->session->userdata('user'));
            $this->db->update('users', $data);

            $this->M_log->show_msg("success", "Data Profile Berhasil Diubah");
            $this->M_log->log_in("Mengubah Data Profile", "users", $this->session->userdata('user'));

            redirect('kelola-akun');
        }
    }
}

/* End of file Kelola_akun.php */
