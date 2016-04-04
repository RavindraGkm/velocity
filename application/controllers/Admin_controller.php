<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_controller extends CI_Controller {

    public function index()
    {
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->view('admin/index');
    }

    public function add_branch()
    {
        $data['name']=$this->input->post('name');
        echo json_encode($data);
    }
}
