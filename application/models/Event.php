<?php
include 'FluffyBunnyDB.php';
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
class Event {
    //put your code here
    function getAllEvents() {
        try {
            $db = FluffyBunnyDB::getPDO();
            $stmt = $db->query('SELECT * FROM events');
            
            $rows = $stmt->fetchAll();
            $allEvents = Array();
            
            $i = 0;
            
            foreach ($rows as $row) {
                $event = (object)$row;
                $allEvents[$i] = $event;
                
                $i++;
            }
        }
        catch (PDOException $ex) {
            echo "<p>FOUT: " . $ex->getMessage() . "</p>";
        }
        
        return $allEvents;
            
    }
}
