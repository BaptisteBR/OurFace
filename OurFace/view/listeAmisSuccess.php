
<div id="listeamis"  style="width: 30%; margin-left: 10px;">
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