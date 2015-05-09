<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <h1><?php echo $title ?></h1>
    <?php echo set_breadcrumb(); ?>

    <?php foreach ($posts as $post_item): ?>
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="content">
                <span class="panel-header"><?php echo $post_item['title'] ?></span> - <?php echo $post_item['datetime'] ?>
                <hr/>
                <?php echo $post_item['text'] ?>
                <br/>
                <p><a href="<?php echo base_url(array('forum','view', $post_item['id'])) ?>">Lees de reacties...</a></p>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
