
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>p6exo1</title>
  </head>
  <body>
    <p>
      <a href="index.php?lastname=Nemare&firstname=Jean">Bonjour</a>
      <?php
      
      if(!empty($_GET['firstname']) AND !empty($_GET['lastname'])){
        /*Affichage des variables de l'url*/
        echo $_GET['firstname'] . ' ' . $_GET['lastname'];
      } else {
          echo 'Veuillez vérifier les paramètres d\'url'
      }

      ?>
    </p>
  </body>
</html>
