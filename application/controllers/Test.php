<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Test
 *
 * @author 11302014
 */
class Test extends CI_Controller {
    public function index()
	{
            $this->load->model('Event');
            $events = $this->Event->getAllEvents();
            $data = Array('events' => $events);
        
		$this->load->helper('url');
		//$this->load->view('welcome_message');
		$this->load->view('templates/header');
		$this->load->view('test/index', $data);
		$this->load->view('templates/footer');
	}
}
