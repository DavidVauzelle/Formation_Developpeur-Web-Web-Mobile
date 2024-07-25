<?php

// Conditions sur un age (mineur/majeur)
$age = 26;
// SI la personne est majeur ALORS afficher "Majeur" SINN afficher "Mineur"
if ($age >= 18) {
    echo '<strong>' . 'Vous êtes Majeur' . '</strong>' . '<br>';
} else {
    echo '<strong>' . 'Vous êtes Mineur' . '</strong>' . '<br>';
}

// Condition sur la taille du prénom
$prenom = 'DavidDavidDavidD';

// SI le prénom est de taille supérieur à 20 caractères ALORS afficher "Prénom trop long"
if (strlen($prenom) > 20) {  
    echo 'Prénom trop long';
}    
// SINN SI le prénom est inférieur à 10 caractères ALORS afficher "Prénom trop court"
    else if (strlen($prenom) < 10) {
        echo 'Prénom trop cours';
}

// SI la taille du prénom est inférieur à 20 et supérieur à 10 ALORS afficher "Prénom de taille moyenne"
// UN seul if et pas de else
if (strlen($prenom) < 20 && strlen($prenom) > 10) {
    echo 'Prénom de taille moyenne';
}

// SI la taille du prénom est supérieur à 15 et inférieur à 30 ET est un nombre paire
if (
    strlen($prenom) > 15 
    && strlen($prenom) < 30 
    && strlen($prenom) % 2 == 0
) {
    echo 'Prénom OK';
}
?>
