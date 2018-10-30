
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>p5exo7</title>
  </head>
  <body>
    <p>
      <?php
      //ajouter la marne au tableau
        $departements = array('02' => 'Aisne','59' => 'Nord', '60' => 'Oise', '80' => 'Somme', '62' => 'Pas-de-Calais');
        $departements['51'] = 'Marne';
        $tab = array('lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi');
        array_push($tab,'samedi');
        var_dump($tab);// utilisation de var_dump pour afficher les valeurs d un tableau
      ?>
    </p>
  </body>
</html>
