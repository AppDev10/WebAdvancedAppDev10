<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Forum extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('forum_model');
	}

	public function index()
	{
		$this->load->helper('url');
		$data['posts'] = $this->forum_model->get_posts();
		$data['title'] = "Forum";

		$this->load->view('templates/header');
		$this->load->view('forum/index',$data);
		$this->load->view('templates/footer');
	}
}