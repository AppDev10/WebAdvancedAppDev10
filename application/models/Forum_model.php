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
    function get_responsesonposts($id = FALSE) {
        if($id === FALSE) {
            $query = $this->db->get('responsesonposts');
            return $query->result();
        }

        $query = $this->db->get_where('responsesonposts',array('id'=>$id));
        return $query->result()[0];
  
    }
    
    //put your code here
    function get_responsesonpostsByPostID($postid) {

        $query = $this->db->get_where('responsesonposts',array('postid'=>$postid));
        return $query->result();
  
    }
    
        //put your code here
    function get_reports($id = FALSE) {
        if($id === FALSE) {
            $query = $this->db->get('reports');
            return $query->result();
        }

        $query = $this->db->get_where('reports',array('id'=>$id));
        return $query->result()[0];
  
    }
    
    function post_responsesonposts($response) {

        $this->db->insert('responsesonposts',$response);
    }
    
    function post_post($post) {

        $this->db->insert('posts',$post);
    }
    
    function post_report($report) {

        $this->db->insert('reports',$report);
    }
    
    function delete_post($id) {

        $this->db->delete('posts',array('id'=>$id));
    }
    
    function delete_responsesonposts($id) {

        $this->db->delete('responsesonposts',array('id'=>$id));
    }
    
    function delete_responsesonpostsByPostid($postid) {

        $this->db->delete('responsesonposts',array('postid'=>$postid));
    }
    
    function delete_report($id) {

        $this->db->delete('reports',array('id'=>$id));
    }
    
    function delete_reportsByPostID($postid) {

        $this->db->delete('reports',array('postid'=>$postid));
    }
    
    function delete_reportsByResponseID($responseid) {

        $this->db->delete('reports',array('responseid'=>$responseid));
    }
}