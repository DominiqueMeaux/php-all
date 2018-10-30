<?php
$date = new DateTime('2016-08-02 15:00:00');
$today = new DateTime();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>exo4</title>
    </head>
    <body>
        <p>
            <?php echo $today->getTimestamps(); ?>
            <?php echo $date->getTimestamps();
            ?>
        </p>
    </body>
</html>