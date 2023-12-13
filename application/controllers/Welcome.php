<?php
defined('BASEPATH') or exit('No direct script access allowed');



class Welcome extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */


	public function index3333()
	{
		// $pngData = $result->getDataUri();
		$this->load->view('sandbox/tiket');
	}

	function cek_userxxxx()
	{
		$this->load->model('M_gzl', "GZL");

		$cek = $this->db->get('users')->result();
		foreach ($cek as $key) {

			// $pass_lama = $this->GZL->decode($key->password);
			// $pass_baru = $this->GZL->enkrip($pass_lama);

			// $data = array(
			// 	'password' => $pass_baru
			// );
			// $this->db->where('user_id', $key->user_id);
			// $this->db->update('users', $data);


			$data = array(
				'user_id' => $key->user_id,
				'username' => $key->username,
				'password' => $this->GZL->dekrip($key->password),
				'nama_lengkap' => $key->nama_lengkap,
				'email' => $key->email,
				'saldo' => $key->saldo,
				'saldo_ppob' => $key->saldo_ppob,
				'tanggal_pendaftaran' => $key->tanggal_pendaftaran,
				'browser' => $key->browser,
				'ip_address' => $key->ip_address,
				'status' => $key->status,
				'level' => $key->level,
				'nomer_hp' => $key->nomer_hp,
				'refferal_id' => $key->refferal_id,
				'reff' => $key->reff,
				'api_key' => $key->api_key,
				'acc_type' => $key->acc_type,
				'profile_photo' => $key->profile_photo,
				'last_login' => $key->last_login,
			);


			echo "<pre>";
			print_r($data);
			echo "</pre>";
		}
	}
}
