<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class package_controller extends CI_Controller
{
    public function edit_package(){
        $this->load->model('order_model');
        $this->load->view('package_edit_form');
    }


}