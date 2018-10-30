<?php
  $number1 = 100;
  $number2 = rand(1,100);
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>p3exo3</title>
  </head>
  <body>
    <p>
      <?php
        while ($number1 >= 10){
          echo $number1 * $number2 . ' ';
          $number1--;
        }
        /*for ($number1 = 100; $number1 >= 10; $number--){
          echo $number1 * $number 2 . ' ';
      }*/
      ?>
    </p>
  </body>
</html>
