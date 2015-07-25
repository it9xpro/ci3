<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends MY_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['page'] = $this->config->item('bootsshop_template_dir_welcome') . "products";
        $this->load->view($this->_container, $data);
    }

    public function product_details($product_id) {
        $data['page'] = $this->config->item('bootsshop_template_dir_welcome') . "product_details";
        $this->load->view($this->_container, $data);
    }

    public function product_categories($category_id) {
        $data['page'] = $this->config->item('bootsshop_template_dir_welcome') . "product_details";
        $this->load->view($this->_container, $data);
    }
}