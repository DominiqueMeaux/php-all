<?php
//declaration des variables
  $age = 34;
  $gender = true;
  if ( $age >= 18){
    if ($gender ==true){
      echo 'Vous êtes un homme et vous êtes majeur.';
  }/*elseif
    ($gender =='homme' && $age <18) {
      echo ' Vous êtes un homme et vous êtes mineur.';
    }elseif
      ($gender =='femme' && $age <18) {
        echo ' Vous êtes une femme et vous êtes mineur.';
  }elseif
    ($gender =='femme' && $age >=18) {
      echo ' Vous êtes une femme et vous êtes majeur.';
    } else {
      echo 'Le sexe n\'est pas valide.';
    } else {
      echo'L\'age n\'est pas valide.';
    }*/
  elseif( $gender == true){//mise en place des conditions
    $gender = 'un homme';
  }else{
    $gender = ' une femme';
  }
 }
  if ( $age >=18){
    $age = 'majeur';
  }else{
    $age = 'mineur';
  }
 ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8"/>
    <title>p2exo3</title>
  </head>
  <body>
    <p>
      <?= 'Vous êtes '.$gender. ' et vous êtes '.$age  ?>
    </p>
  </body>
</html>
