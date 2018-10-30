<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>exo3</title>
  </head>
  <body>
      <?php 
     //choisir la localisation
      setlocale(LC_TIME, "fr_FR.utf-8");
echo 'Nous sommes le '.strftime('%A %d %B %Y', time());
      //afficher la date, strftime indique le local francais
      ?>
  </body>
</html>