<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>OurFace</title>
   	<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<!-- j'ai le droit de mettre des commentaires dans mon fichier HTML -->

<!-- ajoutez un bandeau de notification permettant d'afficher un message (de notification
ou d'erreur) issu de l'exécution d'une action quelconque -->

	<div id="menu">
		<?php 
		include("menuSuccess.php");
		 ?>
	</div>

	<div id="profil">

	</div>

	<div id="bandeau_notification">
		<?php 
		include($template_view);
		?>
	</div>


    
</body>
</html>
