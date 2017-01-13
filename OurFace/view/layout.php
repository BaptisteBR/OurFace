<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>OurFace</title>
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="lib/jquery/jquery-3.1.1.min.js"></script>
    <link rel="stylesheet" href="lib/cssLayout/cssLayout.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  </head>
  <body>
    <div id="total_container" class='mainbody container-fluid'>
      <div class="row">

<?php 

  include("menu.php");

  if (context::getSessionAttribute("user") == null) {
    include($template_view["connect"]);
  }
  else {
    echo "<div id='profil'>";
    include($template_view["profil"]);
    echo "</div>";
    echo "<div id='mur'>";
    include($template_view["mur"]);
    echo "</div>";
    echo "<div id='amis'>";
    include($template_view["amis"]);
    echo "</div>";
    include($template_view["chat"]);
  }

?>

      </div>
    </div>
    <script>

      $(function(){
        $("#finalchat").draggable();
        $("#finalchat").resizable();
      });
      $(function(){
        $('[data-toggle="tooltip"]').tooltip();
      });
      $(function(){
        $('[data-toggle="popover"]').popover();
      });

    </script>
    <script src="lib/js/ajax.js"></script>
  </body>
</html>

<?php
  // Permet de supprimer l'identifiant correspondant à un ami
  context::setSessionAttribute('friend', null);
?>