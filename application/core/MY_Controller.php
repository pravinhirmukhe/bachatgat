<?php

class MY_Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        define('BASEURL', base_url());
        define('SITEURL', site_url());
    }

    public function admin_layout($data) {
        if ($this->session->userdata('adminid') != "") {
            $temp['data'] = $data;
            $this->load->view('layout/index', $temp);
        } else {
            $this->load->view('layout/login');
        }
    }

}
