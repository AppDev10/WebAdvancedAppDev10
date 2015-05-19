<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<h1>Resultaten voor:
    <a href="<?=  base_url(array('Search', 'index')) . "?searchInput=" . htmlentities($searchOn) ?>">Alles</a>
    <a href="<?=  base_url(array('Search', 'news')) . "?searchInput=" . htmlentities($searchOn) ?>">Nieuws</a> 
    <a href="<?=  base_url(array('Search', 'events')) . "?searchInput=" . htmlentities($searchOn) ?>">Events</a> 
    <a href="<?=  base_url(array('Search', 'forum')) . "?searchInput=" . htmlentities($searchOn) ?>">Forum</a>
</h1>
