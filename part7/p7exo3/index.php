<?php ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>p7exo3</title>
    </head>
    <body>
        <form action="user.php" method="GET">
            <!--        placeholder sert généralement a mettre des exemples pour remplir les champs-->
            <label for="lastname">Nom</label><input type="text" id="lastname" name="lastname" placeholder="Nom" />
            <label for="firstname">Prénom</label><input type="text" id="firstname" name="firstname" placeholder="Prénom" />
            <input type="submit" name="soumettre" />
        </form>

    </body>
</html>
