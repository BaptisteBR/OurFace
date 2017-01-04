
<!-- By Aurelien -->

<!--
<div id="finalchat" class="ui-widget-content" style="position: absolute; 
 left: 10px;width:20%; top : 50%;  overflow:scroll;"> -->

<div id="finalchat" class="ui-widget-content" style="
	position: absolute;
	left: 5%;
	width: 45%;
	top: 50%; 
	max-height: 30%;
	z-index: 99999;
	overflow: scroll;">
	 
	<div id="bouton_ongletfermable">
		<img id ="imgCroix" src="images/croix.png" onclick="afficher_cacher('finalchat');">
	</div>

	<span class="label label-primary">Chat : </span>
<!--             -->
<!-- BRIOT-RIBEYRE BAPTISTE -->
	<ul class='list-group' style="
		margin-left: 10px;">
<?php

/*
foreach ( context::getSessionAttribute('user')->chats as $chat )
	
{
*/
foreach ( chatTable::getChats() as $chat ) {

	echo "		<li class='list-group-item'> <b>"
		."			<img src='images/no-image.png' style='width : 5%;'> "
		.strip_tags($chat->emetteur->nom,'')
		." "
		.strip_tags($chat->emetteur->prenom,'')
		."		</b></br>"
		.strip_tags($chat->post->texte,'')
		."		</b></br>"
		."		<div style='font-size:10px; text-align:right; color: grey;'>"
		.strip_tags($chat->post->date->format('Y-m-d H:i:s'),'')
		."		</div>"
		."		</li>";
}


echo "		<li class='list-group-item'> <b>"
	."			Envoyer message : "
	."			<textarea rows='4' cols='50' style='width: 90%;'>"
	."			</textarea>"
	."			</li>";
?>
	</ul>
</div>
<!-- By Aurelien -->
<script>
 function afficher_cacher(id) {
    if (document.getElementById(id).style.visibility == "hidden") {
        document.getElementById(id).style.visibility = "visible";
        document.getElementById('bouton_' + id).innerHTML = 'Cacher le texte';
    }
    else {
        document.getElementById(id).style.visibility = "hidden";
        document.getElementById('bouton_'+id).innerHTML = 'Afficher le texte';
    }
    return true;
}
</script>

