<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>p6exo4</title>
  </head>
  <body>
    <p>
      <a href="index.php?language=PHP&server=LAMP">serv</a>
      <?php
      //!empty permet de vérifier que les données de l url existe
      /*if(!empty($_GET['language']) && !empty($_GET['server'])){
        /*Affichage des variables de l'url*/
        /*echo $_GET['language'] . ' ' . $_GET['server'];
      }else{
          echo 'il manque un paramètre';
      }*/
      if (!empty($_GET['language'])){
          echo $_GET['language'] . ' ';
      }else{
          echo ' il manque le paramètre language ';
      }
      // $_GET est une variable superglobal
      if (!empty($_GET['server'])){
          echo $_GET['server'];
      }else{
          echo ' il manque le paramètre server';
      }

      ?>
    </p>
  </body>
</html>
