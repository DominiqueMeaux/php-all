<?php//déclaration de la fonction ditBonjour qui retourne une chaine de caractere
  function ditBonjour($name){
    return $name;
  }
 ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>p4exo2</title>
  </head>
  <body>
    <p>
      <?php
        echo ditBonjour('bonjour');//affichage du retour de la foncion a laquel on donne une valeur a son parametre.
      ?>
    </p>
  </body>
</html>
