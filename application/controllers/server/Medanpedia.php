<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Medanpedia extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_medanpedia', 'mp');
    }

    public function get_layanan_smm()
    {
        $data = $this->mp->get_layanan_smm();
        echo json_encode($data);
    }
}

/* End of file Medanpedia.php */
