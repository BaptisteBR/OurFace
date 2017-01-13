<!-- By Aurelien -->

		<?php

		$user = null;
		//if ($context->friend != null) {
		// 	$user = $context->friend;
		//}
		//else {
		 	$user = $context->user;
		//}

		?>

        <div class="col-lg-3 col-md-8 col-sm-12 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="media">
                        <div align="center">
                            <img class="thumbnail img-responsive" src=<?php
								if ($user->avatar == null){
								   echo "images/no-image.png";
								}
								else{
									echo $user->avatar;

								}?> 
							width="300px" height="300px">
                        </div>
                        <div class="media-body">
                            <hr>
                            <h3><strong><?php echo $user->nom." ".$user->prenom ?></strong></h3>
                            <hr>
                            <h3><strong>Status</strong></h3>
                            <p >		<?php 
								if ($user->statut == null){
								   
								   echo "<img src='images/rondRouge.png' style='width: 20%;' >";
								}
								else{
									echo "<img src='images/rondVert.png'>";
								}?> </p>
                            <hr>
                           		<div id="addClass"> <p >
         Afficher Chat <img id ="imgNotif" src="images/notif.png">   (1)</p>



        </div>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>