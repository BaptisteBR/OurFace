<!-- By Baptiste -->

<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
	<ul class='list-group dropdown'>
		<li class='list-group-item disabled'>Amis</li>

<?php
	foreach ($context->users as $user) {
		$data = "friend=".$user->id;
		echo "<li class='list-group-item'><a onclick=clickOnFriend('".$data."');>".$user->prenom."</a></li>";
	}
?>

	</ul>
</div>