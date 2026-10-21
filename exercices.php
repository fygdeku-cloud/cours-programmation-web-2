<?php

    // AFFICHER 100 FPOIS LA PHRASE
    $phrase = "Je ne dois pas arriver a l'ecole en retard";

    for ($i=0; $i <100 ; $i++) { 
        echo  "<b>",$i + 1,"</b>", "-", $phrase ,"\t\t";
    }


    // ENTIERS PAIRE DE 1-100
    echo "<br> Les nombres entiers paire sont: <br>";
    for ($i=1; $i <101 ; $i++) { 
        if ($i % 2 == 0) {
            echo "<b>",$i,"</b>\t\t\t";
        }
    }


    // CALCUL DE LA MOYENNE DES N PREMIERS NOMBRES ENTIERS POSITIFS
    $som = 0;
    
    for ($i=1; $i <16 ; $i++) { 
        $som = $som + $i;
    }

    $moyenne = $som / 15;
    echo "<br> La moyenne est, ", $moyenne, "<br>";


    // AFICHAGE DE LA SOMME DES N PREMIERS NOMBRES PAIRES ENTIERS POSITIFS
    $som = 0;
    
    for ($i=1; $i <16 ; $i++) { 
        $som = $som + $i;
    }

    echo "La somme est, ", $som, "<br>";


    // CALCUL DE LA CIRCONFERENCE ET LA SURFACE DU CERCLE
    const pi = 3.14;
    $rayon = 2;
    
    $C = 2 * pi * $rayon;
    $S = pi * ($rayon ** 2);
    echo "La circonference est : ", $C, "<br>";
    echo "La surface est : ", $S, "<br>";


    // MANIPULATION DU TABLEAU 1-
    $tableau = [14, 8, 15.5, 17, 11, 10];
    $note = 15;

    switch ($note) {
        case $tableau[0] > $note:
            echo "Il s'agit de la note:", $tableau[0], " position:", 1;
            break;
        case $tableau[1] > $note:
            echo "Il s'agit de la note:", $tableau[1], " position:", 2;
            break;
        case $tableau[2] > $note:
            echo "Il s'agit de la note:", $tableau[2], " position:", 3;
            break;
        case $tableau[3] > $note:
            echo "Il s'agit de la note:", $tableau[3], " position:", 4;
            break;
        case $tableau[4] > $note:
            echo "Il s'agit de la note:", $tableau[4], " position:", 5;
            break;
        case $tableau[5] > $note:
            echo "Il s'agit de la note:", $tableau[5], " position:", 6;
            break;
        
        default:
            echo "Aucune note trover";
            break;
    }


    // MOYENNE DU TABLEAU
    $somme = 0;

    for ($i=0; $i <6 ; $i++) { 
        $somme = $somme + $tableau[$i];
    }

    $moy = $somme / 6;
    echo "<br>La moyenne generale de la classe est: ", $moy, "<br>";


    // AJOUT DES VALEURS DANS LE TABLEAU
    $tb = [12, 14, 11, 5];

    $tableau[6] = $tb[0];
    $tableau[7] = $tb[1];
    $tableau[8] = $tb[2];
    $tableau[9] = $tb[3];

    print_r($tableau);

?>