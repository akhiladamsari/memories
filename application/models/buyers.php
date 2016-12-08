<?php
class buyers extends CI_Model  {

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
}
?>