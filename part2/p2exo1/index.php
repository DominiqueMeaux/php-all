<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8"/>
    <title>p2exo1</title>
  </head>
  <body>
    <p>
      <?php
        $age = 34;//declaration de la variable
        if ($age >= 18)//mise en place des conditions
        {
          echo 'Vous êtes majeur!';
        }
        else{
          echo 'Vous êtes mineur!';
        }
      ?>
    </p>
  </body>
</html>
