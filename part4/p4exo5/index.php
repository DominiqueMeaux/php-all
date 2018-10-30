<?php//declaration de la fonction
  function conca($age = 0, $name =' '){
    return $age . ' ' .$name;
  }
 ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>p4exo5</title>
  </head>
  <body>
    <p>
      <?php
        echo conca(34 , 'dom');// affichage de la concaténation des 2 para
      ?>
    </p>
  </body>
</html>
