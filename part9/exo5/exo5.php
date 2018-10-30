<?php
$date = new DateTime('2016-08-02 15:00:00');
$today = new DateTime();
$$interval = $date->diff($today);
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>exo5</title>
  </head>
  <body>
      <p>
      <?php       
     echo $interval->format('%R%a') . ' jours';
      ?>
      </p>
  </body>
</html>