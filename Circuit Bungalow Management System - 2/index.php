<?php

session_start();

if(isset($_GET["page"])){
  $page = $_GET["page"];
} else{
  $page = 'home';
}
?>




<!doctype html>
<html lang="en">
  <head>
    <?php require_once(__DIR__.'/app/ux/_head.php'); ?>
  </head>
  <body>

    <?php require_once(__DIR__.'/app/ux/_nav.php'); ?>

    
    <div>
      <?php require_once(__DIR__.'/pages/_'.$page.'.php'); ?>
    </div>
    
    <?php require_once(__DIR__.'/app/ux/_footer.php'); ?>
    <?php require_once(__DIR__.'/pages/_register_user.php'); ?>
    <?php require_once(__DIR__.'/pages/_login_user.php'); ?>
  </body>
</html>
