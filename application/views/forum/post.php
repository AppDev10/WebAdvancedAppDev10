<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container">
    <h1><?php echo $title ." - ". $post_item['title'] ?></h1>
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="content">
                <span class="panel-header"><?php echo $post_item['title'] ?></span>
                <hr/>
                <?php echo $post_item['text'] ?>
            </div>
        </div>
    </div>
</div>


