<?php
  $months = array('Janvier ','Févier ','Mars ','Avril ','Mai ','Juin ','Juillet ','Août ','Septembre ','Octobre ','Novembre ','Décembre ');
 ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>p5exo8</title>
  </head>
  <body>
    <p>
      <?php
        foreach($months as $element )//boucle foreach pour parcourir le tableau
        {
          echo $element . ' ';//affichage des éléments du tableau
        }

      ?>
    </p>
  </body>
</html>
