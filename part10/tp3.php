<?php include 'controlArray.php'
?>
<!DOCTYPE html>
<html lang="fr">
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" />
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="style3.css" type="text/css" />
        <title>tp3</title>
    </head>
    <body>
        <div class="row justify-content-md-center">
            <?php
            
            //fonction qui permet d'afficher les données des tableaux
            function table($array) {
                ?>
                <div class="offset-4 col-md-4 offset-4">
                    <figure class="figure">
                        <img src="<?= $array['portrait'] ?>" class="figure-img img-fluid rounded" alt="Portrait">
                        <figcaption class="figure-caption text-center text-dark bg-danger"><?= $array['name'] . ' ' . $array['firstname'] ?></figcaption>
                    </figure>
                </div>
            <?php } ?>
        </div>
    </body>
</html>
