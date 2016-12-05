<!-- BRIOT-RIBEYRE BAPTISTE -->
<ul>
<?php
foreach ( $context->mavariable->chats as $chat )
{
	echo "<li>"
		.$chat->emetteur->nom
		." "
		.$chat->emetteur->prenom
		." ("
		.$chat->post->date->format('Y-m-d H:i:s')
		.") :</br>"
		.$chat->post->texte
		."</li>";
}
?>
</ul>