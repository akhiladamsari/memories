<?php
class event_model extends CI_Model  {

    public function get_event_name($event_id){
        $data = array(
            'event_id'=> $event_id
        );
        $query = $this->db->get_where('events',$data);
        $event_name = $query->row()->event_name;
        return $event_name;
    }
}