<?php 
class Event_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    //put your code here
    function get_events($slug = FALSE) {
        if($slug === FALSE) {
            $query = $this->db->get('events');
            return $query->result_array();
        }

        $query = $this->db->get_where('events',array('slug'=>$slug));
        return $query->row_array();            
    }
}
