<?php
//Déclaration de la fonction calc
  function calculate( $number1 = 10, $number2= 10, $number3 = 5){// parametre par default
    return $number1 + $number2 + $number3;//calcul
};
 ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>p4exo8</title>
  </head>
  <body>
    <p>
      <?php
        echo calculate ();//affichage
      ?>
    </p>
  </body>
</html>
