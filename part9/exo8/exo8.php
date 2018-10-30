<?php
$nextDay = strtotime('-22days');
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>exo7</title>
    </head>
    <body>
        <p>
        <?php
        //La fonction strtotime() essaye de lire une date au format anglais fournie par le paramètre time, et de la transformer en timestamp Unix (le nombre de secondes depuis le 1er Janvier 1970 à 00:00:00 UTC),
        // relativement au timestamp now, ou à la date courante si ce dernier est omis. il permet aussi d incrémenté un nombre de jour supplementaire a la date du jour.        
        echo date('d-m-Y', $nextDay);
        ?>
        </p>
    </body>
</html>