<?php
$number = 0;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8"/>
        <title>p3exo1</title>
    </head>
    <body>
        <p>
            <?php
            while ($number <= 10) {
                echo $number++ . ' ';
            }
            //possibilité de faire une boucle for car on a un point de départ, une condition et un pas.
            /* for( $number =0; $number >10; number ++;){
              echo $number . ' ';
              } */
            ?>
        </p>
    </body>
</html>
