<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <h1><?php echo $title ?></h1>
    <?php foreach ($posts as $post_item): ?>
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="content">
                <span class="panel-header"><?php echo $post_item['title'] ?></span>
                <hr/>
                <?php echo $post_item['text'] ?>
                <p><a href="<?php echo base_url(array('forum','view', $post_item['slug'])) ?>">Bekijk de volledige post</a></p>
            </div>
        </div>
    </div>

<?php endforeach ?>