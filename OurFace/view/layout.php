<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>OurFace</title>
   	<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   	<script type="text/javascript" src="lib/jquery/jquery-3.1.1.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <style>
    #imgNotif {
      width: 30px;
      height: 30px;
      z-index: 5555;
    }
    #imgCroix {
      float: right;
      width: 20px;
      height: 20px;
    }
    #bouton_ongletfermable {
      position: absolute;
      top: 0;
      left: 0;
      height: 23px;
      width: 100%;
      background: #4c59ff;
      margin: 0;
    }


    body{
      height: 80%;
      width: 100%;
      /*
      background-image: url(images/fond.jpg);
      background-attachment:fixed;
      background-size: 100% 100%;
      background-repeat: no-repeat;
      /*
    }

    .ui-resizable { position: relative;}
    .ui-resizable-handle { position: absolute;font-size: 0.1px; display: block; }
    .ui-resizable-disabled .ui-resizable-handle, .ui-resizable-autohide .ui-resizable-handle { display: none; }
    .ui-resizable-n { cursor: n-resize; height: 7px; width: 100%; top: -5px; left: 0; }
    .ui-resizable-s { cursor: s-resize; height: 7px; width: 100%; bottom: -5px; left: 0; }
    .ui-resizable-e { cursor: e-resize; width: 7px; right: -5px; top: 0; height: 100%; }
    .ui-resizable-w { cursor: w-resize; width: 7px; left: -5px; top: 0; height: 100%; }
    .ui-resizable-se { cursor: se-resize; width: 12px; height: 12px; right: 1px; bottom: 1px; }
    .ui-resizable-sw { cursor: sw-resize; width: 9px; height: 9px; left: -5px; bottom: -5px; }
    .ui-resizable-nw { cursor: nw-resize; width: 9px; height: 9px; left: -5px; top: -5px; }
    .ui-resizable-ne { cursor: ne-resize; width: 9px; height: 9px; right: -5px; top: -5px;}
        
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

    var_dump(context::getSessionAttribute("user")->nom);

		include("profilSuccess.php");
		include("listeAmisSuccess.php");
		include("chatactionSuccess.php");
    include("muractionSuccess.php");
	}

?>
<!--          -->
	<div id="bandeau_notification">
		<?php 
		include($template_view);
		?>
	</div>

	 <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  
  <script>
  console.log("here");
  $( function() {
    $("#finalchat").draggable();
    $("#finalchat").resizable();
        
  } );
  </script>

</div>
</body>
</html>
