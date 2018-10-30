<?php
  $number1 = 0;
  $number2 = rand(0,100);// rand = nombre aléatoire
 ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8"/>
    <title>p3exo2</title>
  </head>
  <body>
    <p>
      <?php
        while ($number1 <= 20){
          echo $number1 * $number2 . ' ';
          $number1++;
        }
        /* for ($number1 = 0; number2 < 20; number1 ++ ){
        echo number1 * number2 . ' ';
      }*/
      ?>
    </p>
  </body>
</html>
