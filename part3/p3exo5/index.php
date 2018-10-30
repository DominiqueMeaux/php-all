<?php   $num_ligne = 1 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>p3exo5</title>
  </head>
  <body>
    <p>
      <?php//boucle for pour incrémenté de 1 à 15
        for($num_ligne = 1; $num_ligne <= 15; $num_ligne++){
          echo 'On y arrive presque' . $num_ligne . ' ';
        }
      ?>
    </p>
  </body>
</html>
