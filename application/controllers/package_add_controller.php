<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class package_controller extends CI_Controller
{
    public function edit_package($package_id){
        $this->load->model('order_model');
        $this->load->view('package_add_form',$package_id);
    }




}