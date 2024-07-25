<?php

// Calculer le nombre de restants dans l'année
// Récupération de la date actuelle et date de fin d’année
$dateActuelleTimestamp = time(); // Réponse : 2024-02-20
$dateFinAnnee = date('Y') . '-12-31'; // Réponse : 2024-12-31
$dateFinAnneeTimestamp = strtotime($dateFinAnnee);

// Faire la différence entre les deux timestamps
$differenceTimestamp = $dateFinAnneeTimestamp - $dateActuelleTimestamp;

// Convertir le timestamp de différence entre les deux dates en jours
$difference = $differenceTimestamp / 86400; // Nombre secondes dans une journée

// Afficher le résultat dans une phrase
echo 'Le nombre de jours restant est : ' . floor($difference);

?>