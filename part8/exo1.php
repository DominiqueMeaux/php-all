<?php
   /*$_SERVER['HTTP_USER_AGENT']; 
   $_SERVER['REMOTE_ADDR'];
   $_SERVER['SERVER_NAME'];*/
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>exo1</title>
  </head>
  <body>
      <a href="index.php">home</a>     
<!--      //user agent est la signature du nav qui le donne au serveur-->
       <p> <?php echo $_SERVER['HTTP_USER_AGENT'];?></p> 
       <p> <?php echo $_SERVER['REMOTE_ADDR'];?></p>
       <p> <?php echo $_SERVER['SERVER_NAME'];?></p>
<!--       //entre croché se sont des clés associative-->
  </body>
</html>
