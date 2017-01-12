<!-- By Baptiste -->


<div id="listeamis"  >
	<ul class='list-group dropdown'>
		<li class='list-group-item disabled'> Amis </li>
	<?php

	foreach (context::getSessionAttribute('users') as $oneuser){

			echo "<li class='list-group-item'><a href='OurFace.php?action=displayFriendWall&friendId=".$oneuser->id."'>".$oneuser->prenom." ".$oneuser->nom."</a></li>";
			
	 }
	 ?>
	</ul>
</div>
