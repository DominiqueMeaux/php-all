<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>p7exo4</title>
  </head>
  <body>
    <p> Bonjour
      <?php
      if(!empty($_POST['lastname']) && !empty($_POST['firstname'])){
        /*Affichage des variables de l'url*/
        echo $_POST['lastname'] . ' ' . $_POST['firstname'];
      }else{
        echo 'veuillez entrée nom et prénom';
      }
      ?>
    </p>
  </body>
</html>
