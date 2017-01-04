<!-- By Aurelien -->
<div id="profil" style="position: absolute; left: 0; width: 20%; margin-left: 10px;">
	<span class="label label-primary">Profil : </span>
	<ul class="list-group">
		<li class="list-group-item">
		<?php 

		// BUG SESSION
		//if (context::getSessionAttribute('user')->avatar == null){
		if (utilisateurTable::getUserById(context::getSessionAttribute('user'))->avatar == null){

		   echo "<img src='images/no-image.png' style='width: 90%; height: 90%;'>";
		}
		else{

			// BUG SESSION
			//echo context::getSessionAttribute('user')->avatar;
			echo utilisateurTable::getUserById(context::getSessionAttribute('user'))->avatar;

		}?> 
		</li>

		<!-- BUG SESSION -->
		<li class="list-group-item"> <?php /*echo context::getSessionAttribute('user')->nom*/echo utilisateurTable::getUserById(context::getSessionAttribute('user'))->nom ?> </li>
		<li class="list-group-item"> <?php /*echo context::getSessionAttribute('user')->prenom*/ utilisateurTable::getUserById(context::getSessionAttribute('user'))->prenom ?> </li>
		
		<li class="list-group-item">
		<?php 
		
		// BUG SESSION
		//if ( context::getSessionAttribute('user')->statut == null){
		if (utilisateurTable::getUserById(context::getSessionAttribute('user'))->statut == null){
		   
		   echo "<img src='images/rondRouge.png' style='width: 20%;' >";
		   echo "Passez en ligne";
		}
		else{
			echo "<img src='images/rondVert.png'>";
			echo "Passez Hors ligne";
		}?> 

		</li>
		<li class="list-group-item" onclick="afficher_cacher('finalchat');">    <div>
         Afficher Chat <img id ="imgNotif" src="images/notif.png">  (1)
        </div></li>
	</ul>
</div>
