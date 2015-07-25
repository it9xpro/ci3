<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends MY_Controller {

    function __construct() {
        parent::__construct();
    }

    public function register() {
        $data['page'] = $this->config->item('bootsshop_template_dir_welcome') . "register";
        $this->load->view($this->_container, $data);
    }

    public function login() {

    }

    public function logout() {

    }
}