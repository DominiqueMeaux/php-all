<?php
$result = 0;
$error = array();
    //vérification si chiffre1 et si chiffre 2 existe !! 
    if (isset($_GET['chiffre1']) && isset($_GET['chiffre2'])) {
        //initialisation de chiffre1
        $chiffre1 = htmlspecialchars ($_GET['chiffre1']);
        //initialisation de chiffre2
        $chiffre2 = htmlspecialchars ($_GET['chiffre2']);
        if (!is_numeric($chiffre1)) {
            $error[] = sprintf('la valeur %s n\'est pas un nombre', $chiffre1);
        }
        //%s permet de dire que l on va donnée un string a cette endrois la ce qui evite la concatenation
             //vérification si on choisi l'addition puis affiché le resultat
        if (!is_numeric($chiffre2)) {
            $error[] = sprintf('la valeur %s n\'est pas un nombre', $chiffre2);
        }
        if(count($error) == 0){
            if (isset($_GET['addition'])) {
                $result = $chiffre1 + $chiffre2;
                 //vérification si on choisi la soustraction puis affiché le resultat
            } elseif (isset($_GET['soustraction'])) {
                $result = $chiffre1 - $chiffre2;
                 //vérification si on choisi multiplication puis affiché le resultat
            } elseif (isset($_GET['multiplication'])) {
                $result = $chiffre1 * $chiffre2;
                 //vérification si on choisi la division puis affiché le resultat
            } elseif (isset($_GET['division'])) {
                if ($chiffre2 == 0) {
                    $result = 0;
                } else {
                    $result = $chiffre1 / $chiffre2;
                }
                //bouton reset
            } elseif (isset($_GET['reset'])) {
                $result = 0;
            }
        }
    }

?>