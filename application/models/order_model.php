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

    public function get_all_packages_m(){
        $query = $this->db->get("package");
        return $query->result();

    }


}
?>