<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



class Event extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('event_model');
		$this->load->helper('url');
                $this->load->helper('breadcrumb');
	}
    //put your code here
	public function index()
	{
		if(isset($this->session->all_userdata()['logged_in'])&&$this->session->all_userdata()['logged_in']['admin']) {
			$data['events'] = $this->event_model->get_events();
			$data['title'] = "Events";
			$this->load->view('templates/header',$data);
			$this->load->view('event/admin');
			$this->load->view('event/index',$data);
			$this->load->view('templates/footer');
		}else {
			$data['events'] = $this->event_model->get_events();
			$data['title'] = "Events";
			$this->load->view('templates/header',$data);
			$this->load->view('event/index',$data);
			$this->load->view('templates/footer');
		}
		
	}

	public function view($slug = NULL) 	{
		if(isset($this->session->all_userdata()['logged_in'])&&$this->session->all_userdata()['logged_in']['admin'])
		{
			$data['event_item'] = $this->event_model->get_events($slug);
			$data['title'] = "Events - ".$data['event_item']['title'];	
			$this->load->view('templates/header',$data);
			$this->load->view('event/admin');
			$this->load->view('event/event',$data);
			$this->load->view('templates/footer');
		}
		elseif($this->session->userdata('logged_in'))
		{
			$data['event_item'] = $this->event_model->get_events($slug);
			$data['title'] = "Events - ".$data['event_item']['title'];	
			$this->load->view('templates/header',$data);
			$this->load->view('event/event',$data);
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
