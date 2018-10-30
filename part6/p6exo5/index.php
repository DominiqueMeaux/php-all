<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>p6exo5</title>
  </head>
  <body>
    <p>
      <a href="index.php?week=12">week</a>
      <?php
      
      if(!empty($_GET['week'])){
        /*Affichage des variables de l'url*/
        echo $_GET['week'];
      }else{
          echo 'un paramètre est manquant';
      }

      ?>
    </p>
  </body>
</html>
