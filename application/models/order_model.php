<?php
class order_model extends CI_Model  {

    public function get_new_order_m(){
        $query = $this->db->where("viewed",0);
        $query = $this->db->get("placed_orders");
        return $query->result();

    }

    public function get_all_orders_m(){
        $query = $this->db->get("placed_orders");
        return $query->result();

    }

    public function accept_order($order_id){
        $this->load->model('order_model');
        $data = array(
            'accepted' => "A"
        );

        $this->db->where('order_id', $order_id);
        $this->db->update('placed_orders', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        }else{
            return false;
        }
    }

    public function reject_order($order_id){
        $this->load->model('order_model');
        $data = array(
            'accepted' => "R"
        );

        $this->db->where('order_id', $order_id);
        $this->db->update('placed_orders', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        }else{
            return false;
        }
    }






}
?>