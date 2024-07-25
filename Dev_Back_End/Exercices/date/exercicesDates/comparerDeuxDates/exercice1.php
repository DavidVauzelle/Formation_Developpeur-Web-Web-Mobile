<?php
declare(strict_types=1);

// Comparer deux dates en PHP

// Définition des deux dates
$date1 = '2024-02-19';
$date2 = '2023-12-25';

// Convertir les dates en timestamps
$timestamp1 = strtotime($date1);
    echo 'Le timestamp de ' . $date1 . ' est : ' . $timestamp1 . '<br>';
$timestamp2 = strtotime($date2);
    echo 'Le timestamp de ' . $date2 . ' est : ' . $timestamp2 . '<br>';

// Comparer les timestamps
if ($timestamp1 < $timestamp2) {
    $dateAnt = $timestamp1;
    // echo "La date 1 est antérieure à la date 2.";
} elseif ($timestamp1 > $timestamp2) {
    $datePost = $timestamp1;
    // echo "La date 1 est postérieure à la date 2.";
} else {
    echo 'Les deux dates sont égales.';
}

// Afficher la date la plus récente
    echo 'La date la plus récente est : ' . date("Y-m-d", $datePost);

?>