<!-- By Aurelien -->
<?php

//foreach ($context->mavariable as $usermessage){

foreach ($context->messages as $message) {

		echo "-->".$usermessage->post->texte." écrit par ".$usermessage->emetteur->nom."  ".$usermessage->emetteur->prenom." à destination de ".$usermessage->destinataire->nom."   ".$usermessage->destinataire->prenom." (le parent étant : ".$usermessage->parent->nom."   ".$usermessage->parent->prenom.")";
 		echo "</br>";
 }
 ?>