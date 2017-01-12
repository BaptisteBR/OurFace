<!-- By Aurelien -->


		<?php

		$currentUser = null;
		if(context::getSessionAttribute('friend') != null) {
			$currentUser = utilisateurTable::getUserById(context::getSessionAttribute('friend'));
		}
		else {
			$currentUser = utilisateurTable::getUserById(context::getSessionAttribute('user'));
		}

		?>

				<!-- BUG SESSION -->
		


        
        <div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="media">
                        <div align="center">
                            <img class="thumbnail img-responsive" src=<?php
		if ($currentUser->avatar == null){
		   echo "images/no-image.png";
		}
		else{
			echo $currentUser->avatar;

		}?> 
		width="300px" height="300px">
                        </div>
                        <div class="media-body">
                            <hr>
                            <h3><strong><?php echo $currentUser->nom." ".$currentUser->prenom ?></strong></h3>
                            <hr>
                            <h3><strong>Status</strong></h3>
                            <p >		<?php 
								if ($currentUser->statut == null){
								   
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