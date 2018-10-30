<?php
  $departements = array(02 => ' Aisne ',59 => ' Nord ', 60 => ' Oise ', 80 => ' Somme ', 62 => ' Pas-de-Calais ');
 ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>p5exo10</title>
  </head>
  <body>
    <p>
      <?php
        foreach ($departements as $num => $name) { ?>
    <p> 'Le département '<?= $name?>  'a le numéro' <?= $num ?>  ;</p>
         <?php } ?>
        <!-- boucle foreach pour parcourir un tableau avec proprété et valeur
      boucle foreach pour parcourir un tableau avec proprété et valeur
       affichage avec concaténation-->
    </p>
  </body>
</html>
