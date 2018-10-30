<?php include 'ctrl.php';?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet" /> 
        <link rel="stylesheet" href="asset/css/style.css" />
        <title>Calculatrice</title>
    </head>
    <body>
        <div class="bgc">
            <h1>Une calculatrice en PHP</h1>
            <form action="#" method="GET">
                <input type="text" name="chiffre1" value="0"/>
                <input class="button" type="submit" name="addition" value="+"/>
                <input class="button" type="submit" name="soustraction" value="-"/>
                <input class="button" type="submit" name="multiplication" value="*"/>
                <input class="button" type="submit" name="division" value="/"/>
                <input type="text" name="chiffre2" value="0"/>
                <input type="submit" name="reset" value="Reset"/>
            </form>
            <?php
            if(count($error) == 0){
                ?>
            
            <p class="result">Résultat : <?= $result; ?> </p>
           <?php } else { ?>
            <p> <?=
        </div>
    </body>
</html>