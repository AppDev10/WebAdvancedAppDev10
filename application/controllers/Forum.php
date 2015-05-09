<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Forum extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('forum_model');
                $this->load->model('user_model');
		$this->load->helper('url');
                $this->load->helper('breadcrumb');
	}

	public function index()
	{

            $data['title'] = "Forum";
            
		if(isset($this->session->all_userdata()['logged_in'])) {
                    $text = $this->input->post('text', TRUE);
                    $title = $this->input->post('title', TRUE);
                    if ($text == TRUE && $title == TRUE) {
                        $toAddPost['text'] = $text;
                        $toAddPost['title'] = $title;
                        $toAddPost['userid'] = $this->session->all_userdata()['logged_in']['id'];

                        $this->forum_model->post_post($toAddPost);
                    }
                    
                    $data['posts'] = $this->forum_model->get_posts();

			$this->load->view('templates/header',$data);
                        if ($this->session->all_userdata()['logged_in']['admin']) {
                            $this->load->view('forum/admin',$data);
                        }
                        $this->load->view('forum/newPostForm',$data);
			$this->load->view('forum/index',$data);
			$this->load->view('templates/footer');
                        
                }
                else {
                    
                    $data['posts'] = $this->forum_model->get_posts();			$this->load->view('templates/header',$data);
			$this->load->view('forum/index',$data);
			$this->load->view('templates/footer');
		}
	}


	public function view($id) {
          
		if(isset($this->session->all_userdata()['logged_in'])) 
		{
                    $responseRecieved = $this->input->post('response', TRUE);
                    if ($responseRecieved !== NULL) {
                        $toAddResponse['response'] = $responseRecieved;
                        $toAddResponse['postid'] = $id;
                        $toAddResponse['userid'] = $this->session->all_userdata()['logged_in']['id'];
                        
                        $this->forum_model->post_responsesonposts($toAddResponse);
                    }
                    
                    $data['post_item'] = $this->forum_model->get_posts($id);
                    $data['title'] = "Forum - " . $data['post_item']['title'];
                    $data['responses'] = $this->forum_model->get_responsesonposts($id);
                    $data['responses'] = $this->user_model->matchUserWithID($data['responses']);

                    $this->load->view('templates/header',$data);
                    
                    if ($this->session->all_userdata()['logged_in']['admin']) {
                        $this->load->view('forum/admin',$data);
                    }
                    
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