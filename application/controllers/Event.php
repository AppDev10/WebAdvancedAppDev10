<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Event
 *
 * @author 11302014
 */
class Event extends CI_Controller {
    //put your code here
    public function index()
	{
		$this->load->helper('url');
		//$this->load->view('welcome_message');
		$this->load->view('templates/header');
		$this->load->view('event/index');
		$this->load->view('templates/footer');
	}
}
