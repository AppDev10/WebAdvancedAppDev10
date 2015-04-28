<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FluffyBunnyDB
 *
 * @author 11302014
 */
class FluffyBunnyDB {
    //put your code here
    static function getPDO() {
        $db = new PDO('mysql:host=localhost;dbname=TED;charset=UTF8','TED', 'TED');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        return $db;
    }
}
