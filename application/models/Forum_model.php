<?php 


class Forum_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    //put your code here
    function get_posts($id = FALSE) {
        if($id === FALSE) {
            $query = $this->db->get('posts');
            return $query->result_array();
        }

        $query = $this->db->get_where('posts',array('id'=>$id));
        return $query->row_array();
  
    }
    
    //put your code here
    function get_responsesonposts($postid) {

        $query = $this->db->get_where('responsesonposts',array('postid'=>$postid));
        return $query->result_array();
  
    }
}