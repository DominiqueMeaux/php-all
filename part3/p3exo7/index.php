<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>p3exo7</title>
  </head>
  <body>
    <p>
      <?php//création d une boucle for avec un pas de 15
      for($num_ligne = 1; $num_ligne <= 100; $num_ligne+=15){
        echo 'On tient le bon bout. ' . $num_ligne . ' ';
      }
      ?>
    </p>
  </body>
</html>
