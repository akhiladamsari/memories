<?php
class package_model extends CI_Model  {

    public function get_all_packages_m(){
        $query = $this->db->get("package");
        return $query->result();

    }

    public function get_package_name($package_id){
        $data = array(
            'package_id'=> $package_id
        );
        $query = $this->db->get_where('package',$data);
        $package_name = $query->row()->package_name;
        return $package_name;
    }
}