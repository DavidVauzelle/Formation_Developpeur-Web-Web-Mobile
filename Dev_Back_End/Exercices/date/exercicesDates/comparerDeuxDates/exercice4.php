<?php
declare(strict_types=1);

// Calculer l'âge à partir d'une date de naissance
// Définition d'une date de naissance
$dateDeNaissance = '1990-01-01';

// Convertir la date de naissance en timestamp
$timestamp = strtotime($dateDeNaissance);

// Obtenir le timestamp actuel
$timestampActuel = time();

// Calculer la différence en secondes entre les deux timestamps
$timestampDiffSecondes = $timestampActuel - $timestamp;

// Convertir la différence en années (pour info : il y a 31536000 secondes dans une année)
$annees = $timestampDiffSecondes / 31536000;

// Afficher l'âge
    echo 'Vous avez ' . floor($annees) . ' ans' . '<br>';