<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('news_model');
		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->helper('url');
		$data['news'] = $this->news_model->get_news();
		$data['title'] = "Home";

		$this->load->view('templates/header');
		$this->load->view('home/index',$data);
		$this->load->view('templates/footer');
	}

	public function view($slug = NULL) 	{
		$data['title'] = "News";
		$data['news_item'] = $this->news_model->get_news($slug);

		$this->load->view('templates/header');
		$this->load->view('home/news',$data);
		$this->load->view('templates/footer');
	}
}