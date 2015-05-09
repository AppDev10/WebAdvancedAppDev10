<?php
//session_start(); //we need to call PHP's session object to access it through CI
class Logout extends CI_Controller {
 public function __construct() {
		parent::__construct();
		$this->load->model('news_model');
		$this->load->helper('url');
                $this->load->helper('breadcrumb');
	}


 function index()
 {
 	$this->session->unset_userdata('logged_in');	// dit werkt nog steeds niet tegoei"
	$data['title'] = "Logout success";
	$this->load->view('templates/header',$data);
	$this->load->view('login/logout_success',$data);
	$this->load->view('templates/footer');
 }
 
}
 
?>