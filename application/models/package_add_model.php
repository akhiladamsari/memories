<?php
class package_model extends CI_Model  {

    public function get_all_packages_m(){
        $query = $this->db->get("package");
        return $query->result();

    }

    public function get_package($package_id){
        $data = array(
            'package_id'=> $package_id
        );
        $query = $this->db->get_where("package",$data);
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

    public function get_by_event_type($type_id,$event_id){
        $data = array(
            'event_id'=> $event_id,
            'type_id'=> $type_id
        );
        $query = $this->db->get_where("package",$data);
        return $query->result();

    }
}