<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index_controller extends CI_Controller {

    public function index()
    {
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->view('index/index');
//        redirect('https://www.facebook.com/WeddingssAndMore/photos_albums');
    }
}
