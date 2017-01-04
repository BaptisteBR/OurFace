<!-- By Baptiste -->
<div id="listeamis"  >
	<span class='label label-primary'>Liste Amis : </span>
	<ul class='list-group'>
		<li class='list-group-item disabled'> Prenom : </li>
	<?php

	foreach (context::getSessionAttribute('users') as $oneuser){

			echo "<li class='list-group-item'><a href='OurFace.php?action=displayFriendWall&friendId=".$oneuser->id."'>".$oneuser->prenom."</a></li>";
			
	 }
	 ?>
	</ul>
</div>
