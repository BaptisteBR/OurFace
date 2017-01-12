<!-- BRIOT-RIBEYRE BAPTISTE -->
<div id="finalmur">

<?php

$currentUser = null;
if(context::getSessionAttribute('friend') != null) {
	$currentUser = utilisateurTable::getUserById(context::getSessionAttribute('friend'));
	echo '<form action="OurFace.php?action=publishMessageOnWall&friendId='.$currentUser->id.'" method="post">';
}
else {
	$currentUser = utilisateurTable::getUserById(context::getSessionAttribute('user'));
	echo '<form action="OurFace.php?action=publishMessageOnWall" method="post">';
}

?>

	<!--<form action="OurFace.php?action=publishMessageOnWall" method="post">-->
		<p>Message :<input type="textarea" name="message" placeholder="Ecrivez votre message ..." /></p>
	 	<p><input type="submit" value="Publier"></p>
	</form>

	<span class="label label-primary">Mur :</span>
	<ul class='list-group' style="margin-left: 10px;">

<?php

// BUG SESSION
//foreach ( $context->muractionVar->messages as $message )
foreach ($currentUser->messages as $message) {
	# code...

	echo "<li class='list-group-item'> <b> Message posté par </b> "
		.$message->parent->nom
		." "
		.$message->parent->prenom
		." ("
		.$message->post->date->format('Y-m-d H:i:s')
		.")</br>Message partagé par "
		.$message->emetteur->nom
		." "
		.$message->emetteur->prenom
		." à "
		.$message->destinataire->nom
		." "
		.$message->destinataire->prenom
		."</br>"
		.$message->post->texte
		."</br> (liked) "
		.$message->aime
		."</li>";
}

?>

	</ul>
</div>