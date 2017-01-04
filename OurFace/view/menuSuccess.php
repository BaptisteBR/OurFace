<!-- By Aurelien -->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href=OurFace.php?action=connect>
        <img alt="OurFace" src="">
      	
      </a>
            <?php
      if (context::getSessionAttribute("user")!=null){
      ?>
      <a class="navbar-brand" href=OurFace.php?action=logout>Deconnection</a>
        <?php
      }else{
        ?>
        <a class="navbar-brand" href=OurFace.php?action=connect>Connection</a>
         <?php
      }
      ?>
    </div>
  </div>
</nav>
