<?php 
//Déclaration des tableaux contenant les portraits
$portrait1 = array('name'=>'Victor ', 'firstname'=>'Hugo ', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/5/5a/Bonnat_Hugo001z.jpg', 'presentation'=>'Victor Hugo est un poète, dramaturge, prosateur et dessinateur romantique français, né à Besançon le 26 février 1802 et mort le 22 mai 1885 à Paris. Il est considéré comme l’un des plus importants écrivains de langue française.');
$portrait2 = array('name'=>'Jean ', 'firstname'=>'de La Fontaine ', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/e/e1/La_Fontaine_par_Rigaud.jpg', 'presentation'=> 'Jean de La Fontaine, né le 8 juillet 1621 à Château-Thierry et mort le 13 avril 1695 à Paris, est un poète français de grande renommée, principalement pour ses Fables et dans une moindre mesure pour ses contes.');
$portrait3 = array('name'=>'Pierre ', 'firstname'=>'Corneille ', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/2/2a/Pierre_Corneille_2.jpg', 'presentation'=> 'Pierre Corneille, aussi appelé « le Grand Corneille » ou « Corneille l\'aîné », né le 6 juin 1606 à Rouen et mort le 1ᵉʳ octobre 1684 à Paris, est un dramaturge et poète français du XVIIᵉ siècle. ');
$portrait4 = array('name'=>'Jean ', 'firstname'=>'Racine ', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/d/d5/Jean_racine.jpg', 'presentation'=>'Jean Racine est un dramaturge et poète français. Consacré par la critique comme l\'un des plus grands auteurs français de tragédies, il est l\'un des trois dramaturges majeurs, avec Corneille et Molière, de la période classique en France.');

/*Déclaration de la fonction displayArray qui permet d'afficher les tableaux 
Dans de rare cas, comme celui-ci, on peut insérer le HTML dans le PHP exceptionnellement */
function displayArray($portraitArray){
    //Déclaration de la variable $display
    $display = '<div class="row">'
            . '<div class="col-lg-3">'
            . '<img src="' . $portraitArray['portrait'] . '" class="mb-5" alt="portrait de ' . $portraitArray['name'] . ' ' . $portraitArray['firstname'] . '" />'
            . ' </div>'
            . '<div class="col-lg-8">'
            . '<h3 class="text-center mt-2">' . $portraitArray['name'] . ' ' . $portraitArray['firstname'] . '</h3>'
            . '<p class="text-center text-dark ml-4">' . $portraitArray['presentation'] . '</p>'
            . '</div>'
            . '</div>';
    
    // On retourne la valeur de $display pour qu'elle s'affiche
    return $display;
}
?>
