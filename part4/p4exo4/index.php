<?php
  function calc($number1, $number2){//declaration de la fonction
    if ($number1 > $number2){
    $message = 'Le premier nombre est plus grand';
  }else if ($number1<$number2){
    $massage = 'Le premier nombre est plus petit';
  }
    else{
    $message = 'Les deux nombres sont identiques';
    }
    return = $message;//dans une fonction un seul return donc on créer une variable que l on retourne une seule fois
  }//pas d echo dans une fonction
 ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>p4exo4</title>
  </head>
  <body>
    <p>
      <?php
        echo calc(12,12);//affichage du resultat de la fonction
      ?>
    </p>
  </body>
</html>
