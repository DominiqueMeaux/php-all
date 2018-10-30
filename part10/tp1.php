<?php
$regexPhone = '/^[0-9]{10}$/';
$regexName = '/^[a-zA-Zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ\-]+$/';
$regexDate = '/^[0-9]{4}-[0-1][0-9]-[0-3][0-9]$/';
$regexText = '/^[a-zA-Zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ\-\ \.\,\?\:\!]+$/';
$regexUrl = '/^(http|https|ftp):\/\/([\w]*)\.([\w]*)\.(com|net|org|biz|info|mobi|us|cc|bz|tv|ws|name|co|me)(\.[a-z]{1,3})?\z/i';
$regexMail = '/^[A-z0-9._%+-]+[@]{1}[A-z0-9.-]+[.]{1}[A-z]{2,4}$/';
$regexAddress = '/^[A-z-éè\ 0-9\']+$/';
$regexBadge = '/^[0-9A-z]+$/';
$regexPoleEmploi = '/^[0-9]{7}[a-z]{1}+$/';
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <link href="https://fonts.googleapis.com/css?family=Chango|Henny+Penny" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Henny+Penny" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
        <title>tp1 p10</title>
    </head>
    <body>
        <p>
            <?php
            //création de la condition qui englobe le formulaire
            if (empty($_POST)) {
                ?>
                <!--création du formulaire-->
            <form action="tp1.php" method="POST">
                <ul>
                    <li><label for="lastname">Nom :</label>
                        <input type="text" name="lastname" placeholder="Nom" required="required" /></li>
                    <li><label for="firstname">Prénom :</label>
                        <input type="text" name="firstname" placeholder="Prénom" required="required" /></li>
                    <li> <label for="birthDate">Date de naissance :</label>
                        <input type="date" name="birthDate" placeholder="Date de naissance" required="required" /></li>
                    <li><label for="placeOfBirth">Pays de naissance :</label>
                        <input type="text" name="placeOfBirth" placeholder="Pays de naissance" required="required" /></li>
                    <li><label for="nationality">Nationalité :</label>
                        <input type="text" name="nationality" placeholder="Nationalité" required="required" /></li>
                    <li><label for="address">Adresse :</label>
                        <input type="text" name="address" placeholder="Adresse" required="required" /></li>
                    <li><label for="mail">Email :</label>
                        <input type="email" name="mail" placeholder="Email" /></li>
                    <li><label for="phoneNumber">Téléphone :</label>
                        <input type="tel" name="phoneNumber" placeholder="Téléphone" required="required" /></li>
                    <li><label for="grade">Diplome :</label>
                        <select id="grade" name="grade" required="required"><!-- utilisation de required pour dire si le champ est bien rempli acec les bonne données-->
                            <option selected disabled>Veuillez selectionner une option</option>
                            <option value="sans">sans</option>
                            <option value="bac">Bac</option>
                            <option value="bac+2">Bac +2</option>
                            <option value="bac+3">Bac +3</option>
                            <option value="supérieur">Supérieur</option>
                        </select></li>
                    <li><label for="poleEmploiNumber">Numéro Pôle emploi : </label>
                        <input type="text" name="poleEmploiNumber" placeholder="Numéro Pôle emploi" required="required" /></li>
                    <li><label for="badgeNumber">Badge :</label>
                        <input type="number" name="badgeNumber" placeholder="nombre de badge" required="required" /></li>
                    <li><label for="url">Liens Codecademy : </label>
                        <input type="url" name="url" placeholder="Liens Codecademy" required="required" /></li>
                    <li><label for="superHeros">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi?:</label>
                        <textarea rows = "4" cols = "50" name = "superHero" required="required" ></textarea></li>
                    <li><label for="hacks">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique):</label>
                        <textarea rows = "4" cols = "50" name = "hacks" required="required" ></textarea></li>
                    <li><label for="info">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?:</label>
                        <textarea rows = "4" cols = "50" name = "info" required="required" ></textarea></li>
                </ul>
                <input type="submit" name="submit" value="soumettre" />
            </form>
            <?php
        } else {
          //condition permettant de vérifier et de détermine si une variable est définie et est différente de NULL
            if (isset($_POST['lastname'])) {
                ?>
                <p>
                    <?php
                    //condition permettant de mettre en place une regex pour le champ selectionné et d affiché
                    if (preg_match($regexName, $_POST['lastname'])) {
                        echo 'Nom : ' . $_POST['lastname'];
                    }
                    ?>
                </p>
                <?php
            }
            if (isset($_POST['firstname'])) {
                ?>
                <p>
                    <?php
                    if (preg_match($regexName, $_POST['firstname'])) {
                        echo 'Prénom : ' . $_POST['firstname'];
                    }
                    ?>
                </p>
                <?php
            }
            if (isset($_POST['birthDate'])) {
                ?>
                <p>
                    <?php
                    if (preg_match($regexDate, $_POST['birthDate'])) {
                        echo 'Date de naissance : ' . $_POST['birthDate'];
                    }
                    ?>
                </p>
                <?php
            }
            if (isset($_POST['placeOfBirth'])) {
                ?>
                <p>
                    <?php
                    if (preg_match($regexText, $_POST['placeOfBirth'])) {
                        echo 'Pays de naissance : ' . $_POST['placeOfBirth'];
                    }
                    ?>
                </p>
                <?php
            }
            if (isset($_POST['nationality'])) {
                ?>
                <p>
                    <?php
                    if (preg_match($regexText, $_POST['nationality'])) {
                        echo 'Nationalité : ' . $_POST['nationality'];
                    }
                    ?>
                </p>
                <?php
            }
            if (isset($_POST['address'])) {
                ?>
                <p>
                    <?php
                    if (preg_match($regexAddress, $_POST['address'])) {
                        echo 'Adresse : ' . $_POST['address'];
                    }
                    ?>
                </p>
                <?php
            }
            if (isset($_POST['mail'])) {
                ?>
                <p>
                    <?php
                    if (preg_match($regexMail, $_POST['mail'])) {
                        echo 'Email : ' . $_POST['mail'];
                    }
                    ?>
                </p>
                <?php
            }
            if (isset($_POST['phoneNumber'])) {
                ?>
                <p>
                    <?php
                    if (preg_match($regexPhone, $_POST['phoneNumber'])) {
                        echo 'Téléphone : ' . $_POST['phoneNumber'];
                    }
                    ?>
                </p>
                <?php
            }
            if (isset($_POST['grade'])) {
                ?>
                <p>
                    <?php
                    if (preg_match($regexText, $_POST['grade'])) {
                        echo 'Diplôme (sans, Bac, Bac+2, Bac+3 ou supérieur) : ' . $_POST['grade'];
                    }
                    ?>
                </p>
                <?php
            }
            if (isset($_POST['poleEmploiNumber'])) {
                ?>
                <p>
                    <?php
                    if (preg_match($regexPoleEmploi, $_POST['poleEmploiNumber'])) {
                        echo 'Numéro pôle emploi : ' . $_POST['poleEmploiNumber'];
                    }
                    ?>
                </p>
                <?php
            }
            if (isset($_POST['badgeNumber'])) {
                ?>
                <p>
                    <?php
                    if (preg_match($regexBadge, $_POST['badgeNumber'])) {
                        echo 'Nombre de badge : ' . $_POST['badgeNumber'];
                    }
                    ?>
                </p>
                <?php
            }
            if (isset($_POST['codecademy'])) {
                ?>
                <p>
                    <?php
                    if (preg_match($regexUrl, $_POST['codecademy'])) {
                        echo 'Liens codecademy : ' . $_POST['codecademy'];
                    }
                    ?>
                </p>
                <?php
            }
            if (isset($_POST['superHero'])) {
                ?>
                <p>
                    <?php
                    if (preg_match($regexText, $_POST['superHero'])) {
                        echo 'Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ? ' . $_POST['superHero'];
                    }
                    ?>
                </p>
                <?php
            }
            if (isset($_POST['hacks'])) {
                ?>
                <p>
                    <?php
                    if (preg_match($regexText, $_POST['hacks'])) {
                        echo 'Racontez-nous un de vos "hacks" (pas forcément technique ou informatique) ' . $_POST['hacks'];
                    }
                    ?>
                </p>
                <?php
            }
            if (isset($_POST['info'])) {
                ?>
                <p>
                    <?php
                    if (preg_match($regexText, $_POST['info'])) {
                        echo 'Avez vous déjà eu une expérience avec la programmation et/ou l\'informatique avant de remplir ce formulaire ? ' . $_POST['info'];
                    }
                    ?>
                </p>
                <?php
            }
        }
        ?>
        <!-- Faire une page pour enregistrer un futur apprenant. On devra pouvoir saisir les informations suivantes :

          Nom
          Prénom
          Date de naissance
          Pays de naissance
          Nationalité
          Adresse
          Email
          Téléphone
          Diplôme (sans, Bac, Bac+2, Bac+3 ou supérieur)
          Numéro pôle emploi
          Nombre de badge
          Liens codecademy
          Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi?
          Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)
          Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?

          A la validation de ces informations, il faudra les afficher dans la même page à la place du formulaire.-->

    </p>
</body>
</html>
