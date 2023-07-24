<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Csrf extends CI_Controller
{

    function refresh_csrf_token()
    {
        $data = array(
            'token' => $this->security->get_csrf_hash()
        );
        echo json_encode($data);
    }
}

/* End of file Csrf.php */
