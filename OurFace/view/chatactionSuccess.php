
<div id="finalchat" style="position: absolute; top: 380px;">
<!-- BRIOT-RIBEYRE BAPTISTE -->
<ul class='list-group' style="margin-left: 10px;">
<?php
foreach ( $context->mavariable->chats as $chat )
{
	echo "<li class='list-group-item disabled'> <b>"
		.$chat->emetteur->nom
		." "
		.$chat->emetteur->prenom
		." ("
		.$chat->post->date->format('Y-m-d H:i:s')
		.") :</b></br>"
		.$chat->post->texte
		."</li>";
}
?>
</ul>
</div>

