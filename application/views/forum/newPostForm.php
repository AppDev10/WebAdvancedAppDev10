<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?> 

<div class="panel panel-default">
        <div class="panel-body">
            <div class="content">
                <form action="<?php echo base_url(array('forum','index')) ?>" method="post">
                    <span class="panel-header"><div class="input-group"><span class="input-group-addon">Titel: </span><input placeholder="Title..." type="text" class="form-control" name="title"/></div></span>
                    <hr/>
                    <div class="input-group">
                        
                            <span class="input-group-addon">post: </span>
                            
                            <textarea name="text" class="form-control forum_textarea" placeholder="Post..." ></textarea>
                            
                            <span class="input-group-addon">
                                <input type="submit" class="btn btn-default" value="Plaats!"/>
                            </span>

                    </div>
                </form>
            </div>
        </div>
    </div>
