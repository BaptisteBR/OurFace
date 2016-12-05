
<div id="listeamis"  style=" position: absolute; width: 30%; margin-right: 10px; left: 65%;">
	<span class='label label-primary'>Liste Amis : </span>
	<ul class='list-group'>
		<li class='list-group-item disabled'> Prenom : </li>
	<?php
	foreach (context::getSessionAttribute('users') as $oneuser){
			echo "<li class='list-group-item'>".$oneuser->prenom;
			echo "<br>";
	 }
	 ?>
	</ul>
</div>
