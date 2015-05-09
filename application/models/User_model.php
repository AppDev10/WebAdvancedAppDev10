<?php
Class User_model extends CI_Model
{
 function login($username, $password)
 {
   $this -> db -> select('id, username, password,admin');
   $this -> db -> from('users');
   $this -> db -> where('username', $username);
   $this -> db -> where('password', $password);
   $this -> db -> limit(1);
 
   $query = $this -> db -> get();
 
   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }

 function get_userLogin($username, $password) {
  $query = $this->db->get_where('users',array('username'=>$username,'password'=>$password));
  return $query->row_array();
 }
 
 function get_user($id = false) {
    if ($id === false) {
        $query = $this->db->get('users');
        return $query->result_array();
    }
     
    $query = $this->db->get_where('users',array('id'=>$id));
    return $query->row_array();
 } 
 function matchUserWithID($responses) {
     $i = 0;
     $toReturn = array();
     
     foreach ($responses as $res) {
         $user = self::get_user($res['userid']);
         $res["user"] = $user;
         
         $toReturn[$i] = $res;
         $i++;
     }
     
     return $toReturn;
 }

function add_user() {
  $data = array(
    'username'=>$this->input->post('username'),
    'password'=>$this->input->post('password'),
    'email'=>$this->input->post('email'),
    'name'=>$this->input->post('naam'),
    'firstName'=>$this->input->post('voornaam'),
    'avatar'=>$this->input->post('avatar')
    );
  $this->db->insert('users',$data);
}
}
?> 