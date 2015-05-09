<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
        
        public function __construct() {
		parent::__construct();
		$this->load->helper('breadcrumb');
	}
        
	public function index()
	{
            
		if(isset($this->session->all_userdata()['logged_in'])&&$this->session->all_userdata()['logged_in']['admin']) {
			$data['title'] = "About";
			$this->load->view('templates/header',$data);
			$this->load->view('about/admin');
			$this->load->view('templates/footer');
		}else {
			$data['title'] = "About";
			$this->load->helper('url');
			$this->load->view('templates/header',$data);
			$this->load->view('about/index');
			$this->load->view('templates/footer');
		}
	}
}