<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class order_controller extends CI_Controller {

    public function get_new_order(){
        $this->load->model('order_model');
        $neworder['neworder'] = $this->order_model->get_new_order_m();
        $this->load->view('seller_profile',$neworder);
    }


}
?>