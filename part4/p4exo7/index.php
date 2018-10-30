<?php//declaration de la fonction
  function maj( $gender ='homme',$age = 0){
    //declaration des conditions
  if ($gender == 'homme'){
    $gender = 'un homme';//gender pour le genre (masculin ou feminin)
  }else{
    $gender = 'une femme';
  }
  if ($age >= 18){
    $age = 'majeur';
  }else{
    $age = 'mineur';
  }
    return 'Vous êtes '. $gender .' et vous êtes '.$age;
  }


 ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>p4exo7</title>
  </head>
  <body>
    <p>
      <?php
        echo maj('femme',10);//affichage de la fonction avec du texte entre les variables
      ?>
    </p>
  </body>
</html>
