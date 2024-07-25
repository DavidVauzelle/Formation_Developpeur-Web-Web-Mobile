<?php

// Afficher la date et l'heure actuelle
    echo date("d.m.Y") . '<br>';

// Afficher le mois actuel
    echo date("F") . '<br>';

// Ajouter des jours (7 jours) / Méthode 1
$next_week = strtotime("+1 week");
    echo date("d-m-Y", $next_week) . '<br>';

// Ajouter des jours (7 jours) / Méthode 2
    echo date("d-m-Y", strtotime("+5 day")) . '<br>';

/* Exercice Avancé
Coté Utilisateur 
- Un formulaire dans une page pour saisir la date anniversaire
- Rechargement de la page
- Afficher le nombre de jours avant prochain anniversaire
*/

print_r($_POST);

if (empty($_POST)) {
    echo 'Veuillez renseigner votre date de naissance !';
}

?>
