<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>p7exo7</title>
    </head>
    <body>
        <p>
            <?php
            //var dump permet d afficher le contenu d une variable
           // var_dump($_FILES)
            if (!empty($_POST['civility']) && !empty($_POST['lastname']) && isset($_POST['firstname']) && !empty($_FILES['file'])) {

                echo $_POST['civility'] . ' ' . $_POST['lastname'] . ' ' . $_POST['firstname'] . ' ' . $_FILES['file'];
            } else {
                ?>
            <form action="index.php" method="POST">
                <label for="civility">Civilité</label>
                <select name="civility">
                    <option value="Mr">Mr</option>
                    <option value="Mme">Mme</option>
                </select>
                <label for="lastname">Nom</label>
                <input type="text" name="lastname" placeholder="Nom"id="lastname" />
                <label for="firstname">Prénom</label>
                <input type="text" name="firstname" placeholder="Prénom" id="firstname"/>
                <input type="file" name="file" value="">
                <input type="submit" name="soumettre" />
            </form>
            <?php
        }/* fermeture du else après le form pour inserer le html, ainsi le form est visible ms une
          fois les données entrée et validé il ne l est plus */
        ?>
    </p>
</body>
</html>
