<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <h1><?php echo $title ?></h1>
    <?php foreach ($events as $event_item): ?>
    <div class="media">
      <div class="media-left">
        <a href="<?php echo base_url(array('event','view', $event_item['slug'])) ?>">
            <img class="media-object" src="<?=base_url(array('assets','images','events',$event_item['imageName']))?>" alt="...">
      </a>
  </div>
  <div class="media-body">
    <h5>Hogeschool PXL</h5>
    <h6>Elfdeliniestraat</h6>
    <h3><?php echo $event_item['date']?></h3>
    <h4 class="media-heading"><?php echo $event_item['title'] ?></h4>
    
    <hr class="streep"/>
    <?php echo $event_item['text'] ?>
</div>
</div>

<?php endforeach ?>


