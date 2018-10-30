<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>p6exo3</title>
    </head>
    <body>
        <p>
            <a href="index.php?startDate=2/05/2016&endDate=27/11/2016">Date</a>
            <?php
            if (!empty($_GET['startDate']) && !empty($_GET['endDate'])) {
                /* Affichage des variables de l'url */
                echo $_GET['startDate'] . ' ' . $_GET['endDate'];
            } else {
                echo 'il manque un paramètre';
            }
            ?>
        </p>
    </body>
</html>
