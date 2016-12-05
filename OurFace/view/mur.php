<!-- BRIOT-RIBEYRE BAPTISTE -->
<ul>
<?php
foreach ( $context->mavariable->messages as $message )
{
	echo "<li> Message posté par "
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
		."</br><3 "
		.$message->aime
		."</li>";
}
?>
</ul>