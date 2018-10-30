<?php $number1 = 1; ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8"/>
    <title>p3exo4</title>
  </head>
  <body>
    <p>
      <?php
        while ($number1 < 10) {
          echo $number . ' ';
          $number1 += $number1 /2;

        }
        /*for ( number1 = 1; $number <= 10; $number += $number /2){
        echo $number . ' ';
      }
      ?>
    </p>
  </body>
</html>
