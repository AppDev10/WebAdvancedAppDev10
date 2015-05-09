<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Register extends CI_Controller {
 
 function __construct()
 {
   parent::__construct();
   $this->load->helper('breadcrumb');
 }
 
 function index()
 {
   $this->load->helper(array('form'));
   $data['title'] = "Registeer";
   $this->load->view('templates/header',$data);
   $this->load->view('login/register',$data);
   $this->load->view('templates/footer');
 }
 
}
 
?>