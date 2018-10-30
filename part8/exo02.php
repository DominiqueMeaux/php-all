<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>exo2</title>
    </head>
    <body>
        <a href="exo2.php">exo2</a>         

        <?php if (!empty($_SESSION['firstname'])) { ?>
            <p><?php echo $_SESSION['firstname']; ?></p>
        <?php } ?>      
        <?php if (!empty($_SESSION['lastname'])) { ?>
            <p><?php echo $_SESSION['lastname']; ?></p>
        <?php } ?>
        <?php if (!empty($_SESSION['age'])) { ?>
            <p><?php echo $_SESSION['age']; ?></p>
        <?php } ?>
    </body>
</html>