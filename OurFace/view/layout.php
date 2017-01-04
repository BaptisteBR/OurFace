<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>OurFace</title>
   	<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   	<script type="text/javascript" src="lib/jquery/jquery-3.1.1.min.js"></script>
    <link rel="stylesheet" href="lib/cssLayout/cssLayout.css"></link>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <style>

        
    </style>
</head>
<body>

<!-- By Aurelien -->
  <div id="menu">
		<?php 
		  include("menuSuccess.php");
		?>
	</div>

  <div id="total_container">

    <?php 
    	if (context::getSessionAttribute("user") != null) {
    		include("profilSuccess.php");
    		include("listeAmisSuccess.php");
    		include("chatactionSuccess.php");
        include("muractionSuccess.php");
    	}
      else{
        include($template_view);
      }

    ?>
      
  	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script>
      $( function() {
        $("#finalchat").draggable();
        $("#finalchat").resizable();
            
      } );
    </script>

  </div>

</body>

</html>
