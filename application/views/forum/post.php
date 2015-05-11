<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <h1><?php echo $title ?></h1>
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="content">
                <span class="panel-header"><?php echo nl2br( htmlentities( $post_item->title ) ) ?></span> - <?php echo $post_item->datetime ?>
                <hr/>
                <?php echo  nl2br( htmlentities( $post_item->text ) ) ?>
            </div>
        </div>
        <div class="panel-footer">
            <div class="content">
            <?php for ($i = 0; $i < count($responses);$i++): 
                $res = $responses[$i];
            ?>
                <div class="forum_response" id="response<?php echo ($i + 1) ?>">
                
                    <div class="row">
                        <div class="col-lg-9 col-md-9 col-sm-8 col-sx-12">
                            <span class="forum_name"> - <?php echo $res->user->username ?> </span>
                            <?php echo nl2br( htmlentities( $res->response)) ?>
                        </div>
                        <div class="forum_date col-lg-3 col-md-3 col-sm-4 col-sx-12">
                            <?php echo $res->datetime; ?>
                            <a href="<?php echo base_url(array('forum','deleteresponse', $res->id)) ?>" class="forum_remove btn btn-default">x</a>
                        </div>
                        
                    </div>
                
                </div>
                <?php if ($i !== count($responses) - 1) : ?>
                <hr class="respons"/>
                <?php endif; ?>
            <?php endfor; ?>
                
                <form action="<?php echo base_url(array('forum','view', $post_item->id)); ?>" method="post">
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


