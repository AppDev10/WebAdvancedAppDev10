<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <h1><?php echo $title ?></h1>
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="content">
                <span class="panel-header"><?php echo $post_item['title'] ?></span>
                <hr/>
                <?php echo $post_item['text'] ?>
            </div>
        </div>
        <div class="panel-footer">
            <div class="content">
            <?php 
            foreach ($responses as $res) {
                echo '<div class="row response">';
                
                echo '<span class="col-lg-1 col-md-1">' . $res['userid'] . '</span>';
                echo '<span class="col-lg-11 col-md-11">' . $res['response'] . '</span>';
                
                echo '</div>';
                echo '<hr class="respons"/>';
            } ?>
            </div>
        </div>
    </div>


