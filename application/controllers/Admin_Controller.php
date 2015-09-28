<?php

class Admin_Controller extends MY_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['template'] = "home";
        $this->admin_layout($data);
    }

    public function login() {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('pass', 'Password', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('layout/login');
        } else {

            $data['template'] = "home";
            $this->admin_layout($data);
        }
    }

}
