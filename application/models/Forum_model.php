<?php 
class Forum_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    //put your code here
    function get_posts($slug = FALSE) {
        if($slug === FALSE) {
            $query = $this->db->get('posts');
            return $query->result_array();
        }

        $query = $this->db->get_where('posts',array('slug'=>$slug));
        return $query->row_array();
  
    }
}