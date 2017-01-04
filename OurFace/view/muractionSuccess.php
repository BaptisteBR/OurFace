<!-- BRIOT-RIBEYRE BAPTISTE -->

<div id="finalmur">
	<span class="label label-primary">Mur : </span>
<ul class='list-group' style="margin-left: 10px;">
<?php

$currentUser = null;
if(context::getSessionAttribute('friend') != null) {
	$currentUser = utilisateurTable::getUserById(context::getSessionAttribute('friend'));
}
else {
	$currentUser = utilisateurTable::getUserById(context::getSessionAttribute('user'));
}

// BUG SESSION
//foreach ( $context->muractionVar->messages as $message )
foreach ($currentUser->messages as $message) {
	# code...

	echo "<li class='list-group-item'>"
		."<div class='contenairContentMur'> "
		."<div class='imageMur'>"
		."<img class='elementImageMur' src='images/no-image.png'>"
		."</div>"
		."<div class='nomMur'>"
		.$message->parent->nom
		." "
		.$message->parent->prenom
		."</div>"
		."<div class='dateMur'>"
		.$message->post->date->format('Y-m-d H:i:s')
		."</div>"
		."<div class='contenuMur'>"
		.$message->post->texte
		."</div>"
		/*."</br>Message partagé par "*/
		/*
		.$message->emetteur->nom
		." "
		.$message->emetteur->prenom
		." à "
		.$message->destinataire->nom
		." "
		.$message->destinataire->prenom
		."</br> (liked) "
		.$message->aime
		*/
		."</div>"
		."</li>";
}
?>
</ul>
</div>


