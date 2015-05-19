<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Search
 *
 * @author 11302014
 */
class Search extends CI_Controller {

    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('Event_model');
        $this->load->model('News_model');
        $this->load->model('Forum_model');
        $this->load->model('Search_model');
        $this->load->helper('url');
    }
    
    public function index()
    {
        $searchOn = $this->input->get('searchInput', TRUE);
        
        $foundNews = array();
        $foundEvents = array();
        $foundPosts = array();
        
        if (trim($searchOn) !== "") {
            $foundNews = $this->Search_model->searchMoreWordsInNews($searchOn);
            $foundEvents = $this->Search_model->searchMoreWordsInEvents($searchOn);
            $foundPosts = $this->Search_model->searchMoreWordsInForum($searchOn);
        }
        
        $title = "gevonden resultaten voor \"" . htmlentities($searchOn) ."\"";
        
        $data = array('title'=>$title , 'searchOn' => $searchOn,'news' => $foundNews, 'events' => $foundEvents, 'posts'=> $foundPosts);
        $newsTitle = "Nieuws voor \"" . htmlentities($searchOn) ."\"";
        $eventTitle = "Events voor \"" . htmlentities($searchOn) ."\"";
        $forumTitle = "Forum posts en responses voor \"" . htmlentities($searchOn) ."\"";
        
        
        if(count($foundNews) === 0) {
            $newsTitle = "";//"Geen nieuws gevonden voor \"$searchOn\"";
        }
        if(count($foundEvents) === 0) {
            $eventTitle = "";//"Geen Events gevonden voor \"$searchOn\"";
        }
        if(count($foundPosts) === 0) {
            $forumTitle = "";//"Geen forum Posts of responses gevonden voor \"$searchOn\"";
        }
        
        if (count($foundPosts) === 0 && count($foundNews) === 0 && count($foundEvents) === 0) {
            $newsTitle = "Geen resultaten gevonden voor \"" . htmlentities($searchOn) ."\"";
        }
        if (trim($searchOn) === "") {
            $newsTitle = "Geef een zoekterm in";
        }
        
        $this->load->view('templates/header',$data);
	$this->load->view('search/results',$data);
	$this->load->view('home/index',array('title'=>$newsTitle, 'news' => $foundNews));
	$this->load->view('event/index',array('title'=>$eventTitle, 'events' => $foundEvents));
	$this->load->view('forum/index',array('title'=>$forumTitle, 'posts'=> $foundPosts));
	$this->load->view('templates/footer');
    }
    
    public function news()
    {
        $searchOn = $this->input->get('searchInput', TRUE);
        
        $foundNews = array();
        if (trim($searchOn) !== "") { 
            $foundNews = $this->Search_model->searchMoreWordsInNews($searchOn);
        }
        
        $newsTitle = "Nieuws voor \"" . htmlentities($searchOn) ."\"";
        
        if(count($foundNews) === 0) {
            $newsTitle = "Geen nieuws gevonden voor \"$searchOn\"";
        }
        if (trim($searchOn) === "") {
            $newsTitle = "Geef een zoekterm in";
        }
        
        $data = array('title'=>$newsTitle , 'searchOn' => $searchOn,'news' => $foundNews);
        
        $this->load->view('templates/header',$data);
	$this->load->view('search/results',$data);
	$this->load->view('home/index',$data);
	$this->load->view('templates/footer');
    }
    
    public function events()
    {
        $searchOn = $this->input->get('searchInput', TRUE);
        
        $foundEvents = array();
        if (trim($searchOn) !== "") {
            $foundEvents = $this->Search_model->searchMoreWordsInEvents($searchOn);
        }
        
        $eventTitle = "Events voor \"" . htmlentities($searchOn) ."\"";
        
        if(count($foundEvents) === 0) {
            $eventTitle = "Geen Events gevonden voor \"$searchOn\"";
        }
        if (trim($searchOn) === "") {
            $eventTitle = "Geef een zoekterm in";
        }
        
        $data = array('title'=>$eventTitle , 'searchOn' => $searchOn, 'events' => $foundEvents);
        
        $this->load->view('templates/header',$data);
	$this->load->view('search/results',$data);
	$this->load->view('event/index',$data);
	$this->load->view('templates/footer');
    }
    
    public function forum()
    {
        $searchOn = $this->input->get('searchInput', TRUE);
        
        $foundPosts = array();
        if (trim($searchOn) !== "") { 
            $foundPosts = $this->Search_model->searchMoreWordsInForum($searchOn);
        }
        
        $forumTitle = "Forum posts en responses voor \"" . htmlentities($searchOn) ."\"";
        
        if(count($foundPosts) === 0) {
            $forumTitle = "Geen Forum posts of responses gevonden voor \"$searchOn\"";
        }
        if (trim($searchOn) === "") {
            $forumTitle = "Geef een zoekterm in";
        }
        
        $data = array('title'=>$forumTitle , 'searchOn' => $searchOn, 'posts'=> $foundPosts);
        
        $this->load->view('templates/header',$data);
	$this->load->view('search/results',$data);
	$this->load->view('forum/index',$data);
	$this->load->view('templates/footer');
    }

}
