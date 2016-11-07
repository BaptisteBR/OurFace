<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Ton appli !</title>
   
</head>
<body>
<!-- j'ai le droit de mettre des commentaires dans mon fichier HTML -->
	<h2>Super c'est ton appli ! </h2>

<!-- ajoutez un bandeau de notification permettant d'afficher un message (de notification
ou d'erreur) issu de l'exécution d'une action quelconque -->

	<div id="bandeau_notification">
		<?php 
		include($template_view);
		 ?>
	</div>
    
</body>
</html>
