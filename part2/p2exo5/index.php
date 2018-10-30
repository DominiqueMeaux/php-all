<?php
  $gender = 'homme';
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8"/>
    <title>p2exo5</title>
  </head>
  <body>
    <p>
      <?php
        if ($gender == 'homme'){
          echo 'c\'est un développeur';
        }else{
          echo 'c\est une développeuse';
        }
      ?>
    </p>
  </body>
</html>
