<?php
    //on demarre la session avant d ecrire du code html
//la session permet de faire passer des données d une page a une autre page
//les session peuvent servir pour les connection sur un profil utilisateur
    session_start();
    //$_session est une superglobal dans la session avec des tableaux associatif
   $_SESSION['firstname'] = 'kiki';
   $_SESSION['lastname'] = 'boudin';
   $_SESSION['age'] = '5 ans';
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>exo2</title>
  </head>
  <body>
      <p>
          <a href="exo02.php">exo02</a>
      <?php
        
       ?>
      </p>

  </body>
</html>