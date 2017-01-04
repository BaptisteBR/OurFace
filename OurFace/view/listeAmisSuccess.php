<!-- By Baptiste -->
<div id="listeamis"  style=" position: absolute; width: 20%; margin-right: 10px; left: 75%;">
	<span class='label label-primary'>Liste Amis : </span>
	<ul class='list-group'>
		<li class='list-group-item disabled'> Prenom : </li>
	<?php

	foreach (context::getSessionAttribute('users') as $oneuser){

			echo "<li class='list-group-item'><a href=''>".$oneuser->prenom."</a></li>";
			
	 }
	 ?>
	</ul>
</div>
