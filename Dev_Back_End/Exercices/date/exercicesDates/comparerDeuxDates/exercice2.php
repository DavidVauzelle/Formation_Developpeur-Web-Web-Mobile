<?php
declare(strict_types=1);

// Calculer la différence entre deux dates
// Définition des deux dates
$dateDebut = '2024-01-01';
$dateFin = '2024-02-19';

// Convertir les dates en timestamps
$timestamp1 = strtotime($dateDebut);
    echo 'Le timestamp de ' . $dateDebut . ' est : ' . $timestamp1 . '<br>';
$timestamp2 = strtotime($dateFin);
    echo 'Le timestamp de ' . $dateFin . ' est : ' . $timestamp2 . '<br>';

// Calculer la différence en secondes entre les deux timestamps
$timestampDiffSecondes = $timestamp2 - $timestamp1;

// Convertir la différence en jours
$timestampDiffJours = $timestampDiffSecondes / 86400;

// Afficher la différence en jours sur le page
    echo 'La différence entre les deux dates est de : ' . $timestampDiffJours . ' jours.' . '<br>';

?>