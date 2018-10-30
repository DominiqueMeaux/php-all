<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>p3exo8</title>
  </head>
  <body>
    <p>
      <?php//mise en place avec une boucle for avec un pas de 12
      for($num_ligne = 200; $num_ligne >= 0; $num_ligne-=12){
        echo 'Enfin !!!! ' . $num_ligne . ' ';
      }
      ?>
    </p>
  </body>
</html>
