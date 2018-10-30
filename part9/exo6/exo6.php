<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>exo6</title>
  </head>
  <body>
      <?php 
      //nb de jours en fevrier 2016
           $number = cal_days_in_month(CAL_GREGORIAN, 2, 2016); // 29
echo "Il y a {$number} days in Février 2016";
      ?>
  </body>
</html>