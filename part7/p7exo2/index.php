<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>p7exo2</title>
  </head>
  <body>
<!--      //action permet de renvoyé vers la page user.php une fois les données envoyés
      //get permet d envoyer les données dans la barre d adresse
      //le formulaire ne peut pas fonctionné sans "action" et "méthode"-->
    <form action="user.php" method="POST">
      <label for="lastname">Nom</label><input type="text" name="lastname" id="lastname" />
      <label for="firstname">Prénom</label><input type="text" name="firstname" id="firstname" />
      <input type="submit" value="Créer"/>
    </form>

  </body>
</html>
