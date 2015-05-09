<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VerifyRegister extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('user_model');
   $this->load->helper('breadcrumb');
 }
 
 function index()
 {
   $this->load->library('form_validation');
  // field name, error message, validation rules
  $this->form_validation->set_rules('username', 'User Name', 'trim|required|min_length[2]');
  $this->form_validation->set_rules('email', 'Your Email', 'trim|required|valid_email');
  $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]|max_length[32]');
  $this->form_validation->set_rules('con_password', 'Password Confirmation', 'trim|required|matches[password]');
  $this->form_validation->set_rules('naam', 'Naam', 'trim|required|min_length[2]');
  $this->form_validation->set_rules('voornaam', 'Voornaam', 'trim|required|min_length[2]');
  



  if($this->form_validation->run() == FALSE)
  {
   $this->load->helper(array('form'));
   $data['title'] = "Registeer";
   $this->load->view('templates/header',$data);
   $this->load->view('login/register',$data);
   $this->load->view('templates/footer');
  }
  else
  {
   $this->user_model->add_user();
   $data['title'] = "login";
    $this->load->view('templates/header',$data);
    $this->load->view('login/confirm');
    $this->load->view('templates/footer');
  }

}

}?>