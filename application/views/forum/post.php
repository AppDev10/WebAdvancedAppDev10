<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <h1><?php echo $title ?></h1>
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="content">
                <span class="panel-header"><?php echo $post_item['title'] ?></span> - <?php echo $post_item['datetime'] ?>
                <hr/>
                <?php echo $post_item['text'] ?>
            </div>
        </div>
        <div class="panel-footer">
            <div class="content">
            <?php foreach ($responses as $res): ?>
                <div class="forum_response">
                
                    <div class="row">
                        <div class="col-lg-10 col-md-9 col-sm-9 col-sx-12">
                            <span class="forum_name"> - <?php echo $res['user']['username'] ?> </span>
                            <?php echo $res['response']; ?>
                        </div>
                        <div class="forum_date col-lg-2 col-md-3 col-sm-3 col-sx-12">
                            <?php echo $res['datetime']; ?>
                        </div>
                    </div>
                
                </div>
                <hr class="respons"/>
                
            <?php endforeach; ?>
                
                <form action="<?php echo base_url(array('forum','view', $post_item['id'])) ?>" method="post">
                    <div class="input-group">
                        
                            <span class="input-group-addon">reactie:</span>
                            
                            <textarea name="response" class="form-control forum_textarea" placeholder="reactie" ></textarea>
                            
                            <span class="input-group-addon">
                                <input type="submit" class="btn btn-default" value="Plaats!"/>
                            </span>

                    </div>
                </form>
            </div>
        </div>
    </div>


