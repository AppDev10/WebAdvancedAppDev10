<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <h1><?php echo $title ?></h1>
    <?php foreach ($news as $news_item): ?>
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="content">
                <span class="panel-header"><?php echo $news_item['title'] ?></span>
                <hr/>
                <?php echo $news_item['text'] ?>
                <p><a href="<?php echo base_url(array('home','view', $news_item['slug'])) ?>">View article</a></p>
            </div>
        </div>
    </div>

<?php endforeach ?>