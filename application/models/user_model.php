<?php
class user_model extends CI_Model  {

    public function buyer_insert($data) {

            $this->db->insert('buyer', $data);
            if ($this->db->affected_rows() > 0) {
                return true;
            }else{
                return false;
            }

    }

    public function buyer_login($username,$password){
        $this->db->where("buyer_username", $username);
        $this->db->where("buyer_password", $password);
        $this->db->get("buyer");
        if ($this->db->affected_rows() > 0) {
            return true;
        }else{
            return false;
        }
    }

    public function seller_login($username,$password){
        $this->db->where("seller_username", $username);
        $this->db->where("seller_password", $password);
        $this->db->get("seller");
        if ($this->db->affected_rows() > 0) {
            return true;
        }else{
            return false;
        }
    }

    public function get_buyer_name($buyer_id){
        $data = array(
            'buyer_id'=> $buyer_id
        );
        $query = $this->db->get_where('buyer',$data);
        $buyer_name = $query->row()->buyer_name;
        return $buyer_name;
    }

    public function get_seller_name($seller_id){
        $data = array(
            'seller_id'=> $seller_id
        );
        $query = $this->db->get_where('seller',$data);
        $seller_name = $query->row()->seller_name;
        return $seller_name;
    }
}
?>