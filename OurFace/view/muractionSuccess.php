<!-- BRIOT-RIBEYRE BAPTISTE -->

<div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
<?php

$currentUser = null;
if(context::getSessionAttribute('friend') != null) {
	$currentUser = utilisateurTable::getUserById(context::getSessionAttribute('friend'));
}
else {
	$currentUser = utilisateurTable::getUserById(context::getSessionAttribute('user'));
}

// BUG SESSION
//foreach ( $context->muractionVar->messages as $message )
foreach ($currentUser->messages as $message) {

?>

	<div class="panel panel-default">
        <div class="panel-body">
            <div class="pull-left">
                <a href="#">
                    <img class="media-object img-circle" src=<?php
            		if ($currentUser->avatar == null){
            		   echo "images/no-image.png";
            		}
            		else{
            			echo $currentUser->avatar;

            		}?>  width="50px" height="50px" style="margin-right:8px; margin-top:-5px;">
                </a>
            </div>
            <h4><a href="#" style="text-decoration:none;"><strong><?php echo $message->parent->prenom." ".$message->parent->nom ?></strong></a> – <small><small><a href="#" style="text-decoration:none; color:grey;"><i><i class="fa fa-clock-o" aria-hidden="true"></i><?php echo $message->post->date->format('Y-m-d H:i:s') ?></i></a></small></small></h4>
            <span>
                <div class="navbar-right">
                    <div class="dropdown">
                        <button class="btn btn-link btn-xs dropdown-toggle" type="button" id="dd1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <i class="fa fa-cog" aria-hidden="true"></i>
                            <span class="caret"></span>
                        </button>
                    </div>
                </div>
            </span>
            <hr>
            <div class="post-content">
                <p><?php echo $message->post->texte ?></p>
            </div>
            <hr>
            <div>

                <div class="pull-left">
                    <p class="text-muted" style="margin-left:5px;"><i class="fa fa-globe" aria-hidden="true"></i> Public</p>
                </div>
                <br>
            </div>
            <hr>
            <div class="media">
                <div class="pull-left">
                    <a href="#">
                        <img class="media-object img-circle" src=<?php
            		if ($currentUser->avatar == null){
            		   echo "images/no-image.png";
            		}
            		else{
            			echo $currentUser->avatar;

            		}?> width="35px" height="35px" style="margin-left:3px; margin-right:-5px;">
                    </a>
                </div>
                <div class="media-body">
                    <textarea class="form-control" rows="1" placeholder="Comment"></textarea>
                </div>
            </div>
        </div>
    </div>

    <?php
        }
    ?>

</div>


