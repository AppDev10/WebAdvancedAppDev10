<?php
session_start(); //we need to call PHP's session object to access it through CI
class Logout extends CI_Controller {
 
 function index()
 {
   $this->session->unset_userdata('logged_in');
   redirect('home','refresh');
 }
 
}
 
?>