<?php

/*1. Créer un tableau qui liste les personnes présentes à la formation
Chaque personne sera composée des éléments suivants :
- prenom (string)
- nom (string)
- email (string)
- telephone (string)
- age (integer)
- vacciné covid (booléan)
*/

$Apprenants = [
    [
        'prenom' => 'David',
        'nom' => 'Vauzelle',
        'email' => 'd.vauz86@gmail.com',
        'telephone' => '0781660679',
        'age' => '32',
        'vaccine' => 'Oui',
    ],
    [
        'prenom' => 'Toto',
        'nom' => 'Petit',
        'email' => 'petit.toto@gmail.com',
        'telephone' => '0700000000',
        'age' => '8',
        'vaccine' => 'Non',
    ],
    [
        'prenom' => 'Alexis',
        'nom' => 'Dupont',
        'email' => 'dupont.alexis@gmail.com',
        'telephone' => '0700000000',
        'age' => '12',
        'vaccine' => 'Oui',
    ]
];

    //print_r($Apprenants);

    
    
   

    // Supprimer la première personne du tableau
    unset($Apprenants[0]);
    // Melanger le tableau en ordre aléatoire
    shuffle($Apprenants);
    // Ajouter une personne au tableau
    array_push($Apprenants,     [
        'prenom' => 'Elodie',
        'nom' => 'Dupont',
        'email' => 'dupont.elodie@gmail.com',
        'telephone' => '0700000000',
        'age' => '100',
        'vaccine' => 'Non',
    ]);
    // Pour afficher uniquements les personnes majeures

    foreach($Apprenants as $Apprenant) {
        if ($Apprenant['age'] >= 18) {
            echo 'Prenom : ' . $Apprenant['prenom'] . ', Nom : ' . $Apprenant['nom'] . ', Email : ' . $Apprenant['email'] . ', Téléphone : ' . $Apprenant['telephone'] . ', Age : ' . $Apprenant['age'] . ', Vacciné : ' . $Apprenant['vaccine'] . '<br>';
        }
    }    