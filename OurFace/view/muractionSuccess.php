<!-- BRIOT-RIBEYRE BAPTISTE -->

<div id="finalmur" style="position: absolute; width:45%; margin-left: 22%;">
	<span class="label label-primary">Mur : </span>
<ul class='list-group' style="margin-left: 10px;">
<?php
foreach ( $context->muractionVar->messages as $message )
{
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
		."</br><3 "
		.$message->aime
		."</li>";
}
?>
</ul>
</div>


