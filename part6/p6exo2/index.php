<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>p6exo2</title>
  </head>
  <body>
    <p>
      <a href="index.php?lastname=Nemare&firstname=Jean">Bonjour</a>
      <?php
      //isset verifie que la variable existe et !empty verifie qu elle existe et qu elle est remplie
      if(!empty($_GET['firstname']) && !empty($_GET['lastname']) && !empty ($_GET['age'])){
        /*Affichage des variables de l'url*/
        echo ['age'];
      }else{
        echo 'erreur 404';
      }

      ?>
    </p>
  </body>
</html>
