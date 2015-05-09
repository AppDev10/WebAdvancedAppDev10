<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Forum extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('forum_model');
		$this->load->helper('url');
                $this->load->helper('breadcrumb');
	}

	public function index()
	{
            $data['posts'] = $this->forum_model->get_posts();
            $data['title'] = "Forum";
            
		if(isset($this->session->all_userdata()['logged_in'])&&$this->session->all_userdata()['logged_in']['admin']) {

			$this->load->view('templates/header',$data);
			$this->load->view('forum/admin',$data);
			$this->load->view('forum/index',$data);
			$this->load->view('templates/footer');
		}else {

			$this->load->view('templates/header',$data);
			$this->load->view('forum/index',$data);
			$this->load->view('templates/footer');
		}
	}

	public function view($id) 	{
		if(isset($this->session->all_userdata()['logged_in'])&&$this->session->all_userdata()['logged_in']['admin']) 
		{
                    $data['post_item'] = $this->forum_model->get_posts($id);
                    $data['title'] = "Forum - " . $data['post_item']['title'];
                    $data['responses'] = $this->forum_model->get_responsesonposts($id);

                    $this->load->view('templates/header',$data);
                    $this->load->view('forum/admin',$data);
                    $this->load->view('forum/post',$data);
                    $this->load->view('templates/footer');
		}
		elseif($this->session->userdata('logged_in'))
		{
                    $data['post_item'] = $this->forum_model->get_posts($id);
                    $data['title'] = "Forum - " . $data['post_item']['title'];
                    $data['responses'] = $this->forum_model->get_responsesonposts($id);
                    
                    $this->load->view('templates/header',$data);
                    $this->load->view('forum/post',$data);
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