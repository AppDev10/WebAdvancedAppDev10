<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container">
    <h1><?php echo $title ?></h1>
    <?php foreach ($news as $news_item): ?>
    <div class="panel panel-default">
        <div class="panel-body">
            <!--<img src="<?=base_url(array('asset','images','events',$news_item['imageName']))?>" class="panel-image">-->
            <div class="content">
                <span class="panel-header"><?php echo $news_item['title'] ?></span>
                <hr/>
                <?php echo $news_item['text'] ?>
                <p><a href="<?php echo $news_item['slug'] ?>">View article</a></p>
            </div>
        </div>
    </div>

<?php endforeach ?>
</div>


