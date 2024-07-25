<?php
declare(strict_types=1);

// Trouver le jour de la semaine pour une date donnée
// Définition d'une date
$date = '2024-02-19';

// Convertir la date en timestamp
$timestamp = strtotime($date);
    echo 'Le timestamp de ' . $date . ' est : ' . $timestamp . '<br>';

// Trouver le jour de la semaine correspondant au timestamp
$jour_de_la_semaine = date("l", $timestamp);

// Afficher le jour
    echo 'Le jour de la semaine correspondant au timestamp du ' . $date . ' est : ' . $jour_de_la_semaine . '<br>';

?>