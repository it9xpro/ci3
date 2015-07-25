<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends MY_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['page'] = $this->config->item('bootsshop_template_dir_welcome') . "home";
        $this->load->view($this->_container, $data);
    }

    public function page_details($page_id) {
        $data['page'] = $this->config->item('bootsshop_template_dir_welcome') . "page";
        $this->load->view($this->_container, $data);
    }

}