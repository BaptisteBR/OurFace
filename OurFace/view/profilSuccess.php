<!-- By Aurelien -->
<div id="profil" style="position: absolute; left: 0; width: 20%; margin-left: 10px;">
	<span class="label label-primary">Profil :</span>
	<ul class="list-group">
		<li class="list-group-item">
		<?php

		$currentUser = null;
		if(context::getSessionAttribute('friend') != null) {
			$currentUser = utilisateurTable::getUserById(context::getSessionAttribute('friend'));
		}
		else {
			$currentUser = utilisateurTable::getUserById(context::getSessionAttribute('user'));
		}

		// BUG SESSION
		//if (context::getSessionAttribute('user')->avatar == null){
		if ($currentUser->avatar == null){

		   echo "<img src='images/no-image.png' style='width: 90%; height: 90%;'>";
		}
		else{

			// BUG SESSION
			//echo context::getSessionAttribute('user')->avatar;
			echo $currentUser->avatar;

		}?> 
		</li>

		<!-- BUG SESSION -->
		<li class="list-group-item"> <?php /*echo context::getSessionAttribute('user')->nom*/echo $currentUser->nom ?> </li>
		<li class="list-group-item"> <?php /*echo context::getSessionAttribute('user')->prenom*/echo $currentUser->prenom ?> </li>
		
		<li class="list-group-item">
		<?php 
		
		// BUG SESSION
		//if ( context::getSessionAttribute('user')->statut == null){
		if ($currentUser->statut == null){
		   
		   echo "<img src='images/rondRouge.png' style='width: 20%;' >";
		   echo "Passer en ligne";
		}
		else{
			echo "<img src='images/rondVert.png'>";
			echo "Passer hors-ligne";
		}?> 

		</li>
		<li class="list-group-item" onclick="afficher_cacher('finalchat');">    <div>
         Afficher Chat <img id ="imgNotif" src="images/notif.png">  (1)
        </div></li>
	</ul>
</div>
