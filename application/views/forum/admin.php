<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<h1>adminPart for Forum</h1>

<div class="panel panel-default">
        <div class="panel-body">
            <div class="content">
                <span class="panel-header">Reports</span>
                <hr/>
                Hier is een lijst met alle gerapporteerde posts en responses:
                <hr/>
                <?php for ($i = 0; $i < count($reports);$i++):
                    $rep = $reports[$i];
                ?>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-sx-4">
                        <?php echo $rep->user->username ?>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-sx-4">
                        <a href="<?php echo base_url(array('forum','view', $rep->postid)) ?>" class="btn btn-default">Ga naar post</a>
                    </div>
                    <div class="forum_date col-lg-4 col-md-4 col-sm-4 col-sx-12">
                        <?php echo $rep->datetime; ?>
                        <a href="<?php echo base_url(array('forum','deletereport', $rep->id)) ?>" class="forum_remove btn btn-default">x</a>
                    </div>
                        
                </div>
                
            <?php endfor; ?>
            </div>
        </div>
    </div>