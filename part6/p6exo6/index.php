<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>p6exo6</title>
  </head>
  <body>
    <p>
      <a href="index.php?building=12&room=101">wee</a>
      <?php
      if(!empty($_GET['building']) && !empty($_GET['room'])){
        /*Affichage des variables de l'url*/
        echo $_GET['building'] . ' ' . $_GET['room'];
      }else{
          echo ' un paramètre est manquant';
      }


      ?>
    </p>
  </body>
</html>
