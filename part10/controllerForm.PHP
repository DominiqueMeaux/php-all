<?php
//Déclaration des regex 
$regexPhone = '/^[0-9]{10}$/';
$regexName = '/^[a-zA-Zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ\-]+$/';
$regexDate = '/^[0-9]{4}-[0-1][0-9]-[0-3][0-9]$/';
$regexText = '/^[a-zA-Zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ\-\ \.\,\?\:\!]+$/';
$regexUrl = '/^(http|https|ftp):\/\/([\w]*)\.([\w]*)\.(com|net|org|biz|info|mobi|us|cc|bz|tv|ws|name|co|me)(\.[a-z]{1,3})?\z/i';
$regexMail = '/^[A-z0-9._%+-]+[@]{2}[A-z0-9.-]+[.]{2}[A-z]{2,4}$/';
$regexAddress = '/^[A-z-éè\ 0-9\']+$/';
$regexBadge = '/^[0-9A-z]+$/';
$regexPoleEmploi = '/^[0-9]{7}[a-z]{1}+$/';
//création du tableau de stockage d erreur
$formError = array();
//Si une valeur existe, on lui attribut le nom d'une variable.
//Si la saisie n'est pas valide on affiche "la saisie n'est pas valide (regex)".
//Si le champs est vide on affiche "Obligatoire".
if (isset($_POST['lastname'])) {
    $lastname = $_POST['lastname'];
    if (!preg_match($regexName, $lastname)) {
        $formError['lastname'] = 'Saisie invalide.';
       
    }
    if (empty($lastname)) {
        $formError['lastname'] = 'Champ obligatoire.';
    }
}
?>
 
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <link href="https://fonts.googleapis.com/css?family=Chango|Henny+Penny" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Henny+Penny" rel="stylesheet" />
        <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
        <title>tp1 p10 correction</title>
    </head>
    <body>

        <!--création du formulaire-->
   
        <form action="correctp1.php" method="POST">
            <div class="form-group">
                <label for="lastname">Nom :</label>
                <input class="form-control" type="text" name="lastname" placeholder="Nom" id="lastname" value = "<?= isset($lastname) ? $lastname : '' ;?>" required="required" />
               
                <label for="firstname">Prénom :</label>
                <input class="form-control" type="text" name="firstname" placeholder="Prénom" id="firstname" required="required" />
                <label for="birthDate">Date de naissance :</label>
                <input class="form-control" type="date" name="birthDate" placeholder="Date de naissance" id="birthDate" required="required" />
                <label for="placeOfBirth">Pays de naissance :</label>
                <input class="form-control" type="text" name="placeOfBirth" placeholder="Pays de naissance" id="placeOfBirth" required="required" />
                <label for="nationality">Nationalité :</label>
                <input class="form-control" type="text" name="nationality" placeholder="Nationalité" id="nationality"required="required" />
                <label for="address">Adresse :</label>
                <input class="form-control" type="text" name="address" placeholder="Adresse" id="address" required="required" />
                <label for="mail">Email :</label>
                <input class="form-control" type="email" name="mail" placeholder="Email" id="email" required="required" />
                <label for="phoneNumber">Téléphone :</label>
                <input class="form-control" type="tel" name="phoneNumber" placeholder="Téléphone" id="phoneNumber" required="required" />
                <label for="grade">Diplome :</label>
                <select class="form-control"  id="grade" name="grade" id="grade"required="required"><!-- utilisation de required pour dire si le champ est bien rempli acec les bonne données-->
                    <option selected disabled>Veuillez selectionner une option</option>
                    <option value="sans">sans</option>
                    <option value="bac">Bac</option>
                    <option value="bac+2">Bac +2</option>
                    <option value="bac+3">Bac +3</option>
                    <option value="supérieur">Supérieur</option>
                </select></li>
                <label for="poleEmploiNumber">Numéro Pôle emploi : </label>
                <input class="form-control" type="text" name="poleEmploiNumber" placeholder="Numéro Pôle emploi" required="required" />
                <label for="badgeNumber">Badge :</label>
                <input class="form-control" type="number" name="badgeNumber" placeholder="nombre de badge" required="required" />
                <label for="url">Liens Codecademy : </label>
                <input class="form-control" type="url" name="url" placeholder="Liens Codecademy" required="required" />
                <label for="superHeros">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi?:</label>
                <textarea class="form-control" rows = "4" cols = "50" name = "superHero" id="superHeros" required="required" ></textarea>
                <label for="hacks">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique):</label>
                <textarea class="form-control" rows = "4" cols = "50" name = "hacks" id="hacks" required="required" ></textarea>
                <label for="info">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?:</label>
                <textarea class="form-control" rows = "4" cols = "50" name = "info" id="info" required="required" ></textarea>
            </div>
            <input type="submit" name="submit" value="soumettre" />
        </form>
             
<?php
?>

    </body>
</html>
