<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Forum extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('forum_model');
		$this->load->helper('url');
	}

	public function index()
	{
		
		$data['posts'] = $this->forum_model->get_posts();
		$data['title'] = "Forum";

		$this->load->view('templates/header');
		$this->load->view('forum/index',$data);
		$this->load->view('templates/footer');
	}

	public function view($slug = NULL) 	{
		$data['title'] = "Forum";
		$data['post_item'] = $this->forum_model->get_posts($slug);
		$this->load->view('templates/header');
		//get all events from database
		$this->load->view('forum/post',$data);
		$this->load->view('templates/footer');
	}
}