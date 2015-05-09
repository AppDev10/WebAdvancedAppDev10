<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <h1><?php echo $title ?></h1>
    <?php echo set_breadcrumb(); ?>
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="content">
                <span class="panel-header"><?php echo $news_item['title'] ?></span>
                <hr/>
                <?php echo $news_item['text'] ?>
            </div>
        </div>
    </div>