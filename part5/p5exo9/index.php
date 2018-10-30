<?php
  $departements = array(02 => ' Aisne ',59 => ' Nord ', 60 => ' Oise ', 80 => ' Somme ', 62 => ' Pas-de-Calais ');
 ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>p5exo9</title>
  </head>
  <body>
    <p>
      <?php
        foreach ($departements as $num => $name) {//boucle foreach pour parcourir un tableau avec proprété et valeur
          echo $num, $name;
        }

      ?>
    </p>
  </body>
</html>
