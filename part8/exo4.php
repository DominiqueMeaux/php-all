<?php
//stocke les informations dans des cookies.
if (!empty($_POST['login'])) {
    setcookie('cookieLogin', $_POST['login'],(time() + 365 * 24 * 3600, null, null, false, true));
}
if (!empty($_POST['password'])) {
    setcookie('cookiePassword', $_POST['password'],(time() + 365 * 24 * 3600, null, null, false, true));

} else {
    //affichage d'un msg d'erreur
    echo 'Entrer des valeurs';
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>P8 Exercice 4</title>
    </head>
    <body>
        <p>
            Login : 
            <?php
            //affichage du contenu du cookie login
            echo $_COOKIE['login'];
            ?>
        </p>
        <p>
            Password : 
            <?php
            //affichage du contenu du cookie password
            echo $_COOKIE['password'];
            ?>
        </p>
    </body>
</html>