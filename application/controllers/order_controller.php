<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class order_controller extends CI_Controller {

    public function get_new_order(){
        $this->load->model('order_model');
        $neworder['neworder'] = $this->order_model->get_new_order_m();
        $this->load->view('seller_profile',$neworder);
    }

    public function accept_order($order_id){
        $this->load->model('order_model');
        $result = $this->order_model->accept_order($order_id);
        if ($result == true) {
            $neworder['neworder'] = $this->get_new_order();
        }else{
            $this->load->view('accept_error');
        }
    }

    public function reject_order($order_id){
        $this->load->model('order_model');
        $result = $this->order_model->reject_order($order_id);
        if ($result == true) {
            $neworder['neworder'] = $this->get_new_order();
        }else{
            $this->load->view('accept_error');
        }
    }

}
?>