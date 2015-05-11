<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <h1><?php echo $title ?></h1>
   
    
    <?php for ($i = count($posts) - 1; $i >= 0; $i--): 
        $post_item = $posts[$i];
?>
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="content">
                <span class="panel-header"><?php echo nl2br( htmlentities( $post_item->title ) )?></span> - <?php echo $post_item->datetime ?>
                <hr/>
                <?php echo nl2br( htmlentities( $post_item->text ) ) ?>
                <br/>
                <p><a href="<?php echo base_url(array('forum','view', $post_item->id)) ?>">Lees de reacties...</a></p>
            </div>
        </div>
    </div>
    <?php endfor;