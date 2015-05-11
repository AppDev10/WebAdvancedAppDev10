<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('news_model');
		$this->load->helper('url');
        $this->load->helper('breadcrumb');
	}

        public function Home()
        {
 		parent::Controller();
        }
        
	public function index()
	{
            
		if(isset($this->session->all_userdata()['logged_in'])&&$this->session->all_userdata()['logged_in']['admin']){
			$this->load->helper('url');
		$data['news'] = $this->news_model->get_news();
		$data['title'] = "Home";

		$this->load->view('templates/header',$data);
		$this->load->view('home/admin');
		$this->load->view('home/index',$data);
		$this->load->view('templates/footer');
	} else {

			$this->load->helper('url');
		$data['news'] = $this->news_model->get_news();
		$data['title'] = "Home";

		$this->load->view('templates/header',$data);
		$this->load->view('home/index',$data);
		$this->load->view('templates/footer');
		}
	}

	public function view($slug = NULL) 	{
		if(isset($this->session->all_userdata()['logged_in'])&&$this->session->all_userdata()['logged_in']['admin'])
		{
			$data['news_item'] = $this->news_model->get_news($slug);
			$data['title'] = "News - ".$data['news_item']['title'];	

			$this->load->view('templates/header',$data);
			$this->load->view('home/admin');
			$this->load->view('home/news',$data);
			$this->load->view('templates/footer');
		}
		elseif($this->session->userdata('logged_in'))
		{
			$data['news_item'] = $this->news_model->get_news($slug);
			$data['title'] = "News - ".$data['news_item']['title'];	

			$this->load->view('templates/header',$data);
			$this->load->view('home/news',$data);
			$this->load->view('templates/footer');
		}
		else
		{
     		//If no session, redirect to login page
			$this->load->helper(array('form'));
			$data['title'] = "login";
			$this->load->view('templates/header',$data);
			$this->load->view('login/access-denied');
			$this->load->view('templates/footer');
		}
	}
}