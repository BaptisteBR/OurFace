<!-- By Aurelien -->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">

<?php
if(context::getSessionAttribute('user') == null) {
  echo "<a class='navbar-brand' href='OurFace.php?action=connect'>";
}
else {
  echo "<a class='navbar-brand' href='OurFace.php?action=submit'>";
}
?>


        <img alt="OurFace" src="">
      </a>


      <a class='navbar-brand' href=''> Amis </a>
            <?php
      if (context::getSessionAttribute("user")!=null){
      ?>
      <a class="navbar-brand" href="OurFace.php?action=logout">Deconnection</a>
        <?php
      }else{
        ?>
        <a class="navbar-brand" href="OurFace.php?action=connect">Connection</a>
         <?php
      }
      ?>
      

    </div>
  </div>
</nav>
