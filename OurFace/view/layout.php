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


	<div id="menu">
		<?php 
		include("menuSuccess.php");
		 ?>
	</div>

<?php 
	if (context::getSessionAttribute("user")!=null){
		include("profilSuccess.php");
		include("mur.php");
		include("listeAmisSuccess.php");
		include("chat.php");
		include("deconnexion.php");
	}

?>

	<div id="bandeau_notification">
		<?php 
		include($template_view);
		?>
	</div>

</body>
</html>
