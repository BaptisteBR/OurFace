<p>Ceci est unf super  ! dingue non ? </p>
<?php
foreach ($context->mavariable as $usermessage){

		echo "-->".$usermessage->post->texte." ecrit par ".$usermessage->emetteur->nom."  ".$usermessage->emetteur->prenom." à destination de ".$usermessage->destinataire->nom."   ".$usermessage->destinataire->prenom." (le parent étant : ".$usermessage->parent->nom."   ".$usermessage->parent->prenom.")";
 		echo "</br>";
 }
 ?>