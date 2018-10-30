<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8"/>
    <title>p2exo2</title>
  </head>
  <body>
    <p>
      <?php
      $isEasy = true;//initialisation de la variable de type booleens
 if ($isEasy == true) {//mise en place des conditions
    echo ('C\'est facile !');
  }

  else {
    echo ('C\'est difficile !');
  }
  /*switch ($isEasy) {// utiliser switch pour réduire la longueur du code
    case false:
    echo ('C\'est facile !');
    break;
    case true:
    echo ('C\'est difficile !');
    break;
  }*/

  //utilisation d une terner
  echo $isEasy ? 'C\'est facile !': 'C\'est difficile !';
        ?>
    </p>
  </body>
</html>
