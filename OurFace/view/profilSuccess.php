<!-- By Aurelien -->
<div id="profil" style="position: absolute; left: 0; width: 20%; margin-left: 10px;">
	<span class="label label-primary">Profil : </span>
	<ul class="list-group">
		<li class="list-group-item">
		<?php 
		if (context::getSessionAttribute('user')->avatar == null){
		   echo "<img src='images/no-image.png' style='width: 90%; height: 90%;'>";
		}
		else{
			echo context::getSessionAttribute('user')->avatar;
		}?> 
		</li>
		<li class="list-group-item"> <?php echo context::getSessionAttribute('user')->nom ?> </li>
		<li class="list-group-item"> <?php echo context::getSessionAttribute('user')->prenom ?> </li>
		<li class="list-group-item">
		<?php 
		if ( context::getSessionAttribute('user')->statut == null){
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
