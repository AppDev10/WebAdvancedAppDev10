<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container">
  <h1><?php echo $title ?></h1>
  <div class="panel panel-default">
    <div class="panel-body">
      <div class="content">
        <img src="" alt="...">
        <h5>Hogeschool PXL</h5>
        <h6>Elfdeliniestraat</h6>
        <h3><?php echo $event_item['date']?></h3>
        <h4 class="media-heading"><?php echo $event_item['title'] ?></h4>
        <hr/>
        <p><?php echo $event_item['text'] ?></p>

        <h3>Sprekers:</h3>
        list of speakers
      </div>
    </div>
  </div>
</div>


