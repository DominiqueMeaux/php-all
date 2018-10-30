<?php//déclaration de la fonction
  function returnDescription( $lastname =' ', $firstname = ' ' , $age = 0){
    return 'Bonjour ' .$lastname. ' '. $firstname. ' ,tu as '. $age.' ans';
  }
 ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>p4exo6</title>
  </head>
  <body>
    <p>
      <?php
        echo returnDescription('Meaux', 'Dominique',34);//affichage de la conca
      ?>
    </p>
  </body>
</html>
