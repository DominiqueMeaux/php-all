<?php include 'controllerTP3.php' ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
        <link href="https://fonts.googleapis.com/css?family=Neucha" rel="stylesheet" />
        <link rel="stylesheet" href="style.css" />
        <title>TP3</title>
    </head>
    <body>
        <div class="container mt-3">
            <h1 class="text-center mb-5">Auteurs français</h1>
            <?= // On fait un echo de la fonction avec en paramètre le nom du tableau pour qu'il s'affiche
            displayArray($portrait1); ?>
            <?= displayArray($portrait2); ?>
            <?= displayArray($portrait3); ?>
            <?= displayArray($portrait4); ?>
        </div>
    </body>
</html>
