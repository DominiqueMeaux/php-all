<?php//déclaration d une fonction avec variable inclut dans du texte
  function ditBonjour($name='Bertrand', $dit='dit bonjour'){
    return $name. ' ' . $dit;
  }
 ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>p4exo3</title>
  </head>
  <body>
    <p>
      <?php
        echo ditBonjour()
      ?>
    </p>
  </body>
</html>
