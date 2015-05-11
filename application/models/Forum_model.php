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
            return $query->result();
        }

        $query = $this->db->get_where('posts',array('id'=>$id));
        return $query->result()[0];
  
    }
    
    //put your code here
    function get_responsesonposts($postid) {

        $query = $this->db->get_where('responsesonposts',array('postid'=>$postid));
        return $query->result();
  
    }
    
    function post_responsesonposts($response) {

        $this->db->insert('responsesonposts',$response);
    }
    
    function post_post($post) {

        $this->db->insert('posts',$post);
    }
}