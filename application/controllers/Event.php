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
	}
    //put your code here
	public function index()
	{
		$this->load->helper('url');
		$data['events'] = $this->event_model->get_events();
		$data['title'] = "Events";
		$this->load->view('templates/header');
		//get all events from database
		$this->load->view('event/index',$data);
		$this->load->view('templates/footer');
	}

	public function view($slug = NULL) 	{
		$data['news_item'] = $this->news_model->get_news($slug);
		$this->load->view('templates/header');
		//get all events from database
		$this->load->view('event/event',$data);
		$this->load->view('templates/footer');
	}

}
