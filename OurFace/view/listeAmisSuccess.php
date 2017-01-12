<!-- By Baptiste -->


<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">


	<ul class='list-group dropdown'>
		<li class='list-group-item disabled'> Amis </li>

	<?php

	foreach (context::getSessionAttribute('users') as $oneuser){

			echo "<li class='list-group-item'><a href='OurFace.php?action=displayFriendWall&friendId=".$oneuser->id."'>".$oneuser->prenom." ".$oneuser->nom."</a></li>";
			

			//echo "<li class='list-group-item'><a href='OurFace.php?action=displayFriendWall&friendId=".$oneuser->id."'>".$oneuser->prenom."</a></li>";

			//echo "<li class='list-group-item'><a>".$oneuser->prenom."</a></li>";


	 }
	 ?>
	</ul>

</div>
