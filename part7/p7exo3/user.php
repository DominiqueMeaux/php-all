<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>p7exo3</title>
    </head>
    <body>
        <p> Bonjour
            <?php
            //!empty sert a vérifier que le champs est bien rempli
            if (!empty($_GET['lastname']) && !empty($_GET['firstname'])) {
                /* Affichage des variables de l'url */
                echo $_GET['lastname'] . ' ' . $_GET['firstname'];
            } else {
                echo 'veuillez entrée nom et prénom';
            }
            ?>
        </p>
    </body>
</html>
