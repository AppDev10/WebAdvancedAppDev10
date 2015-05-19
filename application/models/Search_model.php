<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SearchDB
 *
 * @author 11302014
 */
class Search_model extends CI_Model {
    
    public function searchMoreWordsInNews($sentence) {
        $words = preg_split("/[\s,]+/", trim($sentence));
        
        if (count($words) === 0) {
            return array();
        }
        
        $toReturn = $this->searchOnWordInNews($words[0]);
        
        for ($i = 1; $i < count($words) && count ($toReturn) !== 0; $i++) {
            $toReturn = $this->searchOnWordInNews($words[$i], $toReturn);
        }
        
        return $toReturn;
    }
    
    public function searchMoreWordsInEvents($sentence) {
        $words = preg_split("/[\s,]+/", trim($sentence));
        
        if (count($words) === 0) {
            return array();
        }
        
        $toReturn = $this->searchOnWordInEvents($words[0]);
        
        for ($i = 1; $i < count($words) && count ($toReturn) !== 0; $i++) {
            $toReturn = $this->searchOnWordInEvents($words[$i], $toReturn);
        }
        
        return $toReturn;
    }
    
    public function searchMoreWordsInForum($sentence) {
        $words = preg_split("/[\s,]+/", trim($sentence));
        
        if (count($words) === 0) {
            return array();
        }
        
        $toReturn = $this->searchOnWordInForum($words[0]);
        
        for ($i = 1; $i < count($words) && count ($toReturn) !== 0; $i++) {
            $toReturn = $this->searchOnWordInForum($words[$i], $toReturn);
        }
        
        return $toReturn;
    }
    
    public function searchOnWordInNews($text, $newsItems = FALSE) {
        
        if ($newsItems === FALSE) {
            $news_model = new News_model();
            $newsItems = $news_model->get_news();
        }
        
        $toReturn = array();
        $index = 0;
        
        for ($i = 0; $i < count($newsItems); $i++) {
            if (preg_match("/$text/i", $newsItems[$i]['title']) || preg_match("/$text/i", $newsItems[$i]['text'])) {
                $toReturn[$index] = $newsItems[$i];
                
                $index++;
            }
        }
        
        return $toReturn;
    }
    
    public function searchOnWordInEvents($text, $eventItems = FALSE) {
        if ($eventItems === FALSE) {
            $event_model = new Event_model();
            $eventItems = $event_model->get_events();
        }
        
        $toReturn = array();
        $index = 0;
        
        for ($i = 0; $i < count($eventItems); $i++) {
            if (preg_match("/$text/i", $eventItems[$i]['title']) || preg_match("/$text/i", $eventItems[$i]['text'])) {
                $toReturn[$index] = $eventItems[$i];
                
                $index++;
            }
        }
        
        return $toReturn;
    }
    
    public function searchOnWordInForum($text) {
        $posts = $this->searchOnWordInForumPosts($text);
        
        return $posts;
    }
    
    
    private function searchOnWordInForumPosts($text, $forumItems = false) {
        if ($forumItems === FALSE) {
            $forum_model = new Forum_model();
            $forumItems = $forum_model->get_posts();
        }
        
        $toReturn = array();
        $index = 0;
        
        for ($i = 0; $i < count($forumItems); $i++) {
            if (preg_match("/$text/i", $forumItems[$i]->title) || preg_match("/$text/i", $forumItems[$i]->text) || $this->searchOnWordInForumResponses($text, $forumItems[$i]->id)) {
                $toReturn[$index] = $forumItems[$i];
                
                $index++;
            }
        }
        
        return $toReturn;
    }
    private function searchOnWordInForumResponses($text, $postid) {
        $forum_model = new Forum_model();
        $forumItems = $forum_model->get_responsesonpostsByPostID($postid);
        
        for ($i = 0; $i < count($forumItems); $i++) {
            if (preg_match("/$text/i", $forumItems[$i]->response)) {
                return TRUE;
            }
        }
        
        return FALSE;
    }
}
