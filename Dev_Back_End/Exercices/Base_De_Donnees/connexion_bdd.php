<?php

// Paramètres de connexion
$serveur = "localhost";
$utilisateur = "root";
$mot_de_passe = "";
$base_de_donnees = "bd_exercice_jointure";

// Établir la connexion
$connexion = mysqli_connect($serveur, $utilisateur, $mot_de_passe, $base_de_donnees);

// Vérifier la connexion
if (!$connexion) {
    die("Échec de la connexion : " . mysqli_connect_error());
} else {
    echo "Connexion réussie à la base de données.";
}


// Exécuter une requête SELECT

$sql = "SELECT * FROM lecteur";
$resultat = mysqli_query($connexion, $sql);

// Vérifier si la requête a réussi
print_r($resultat);

if ($resultat) {
    
    foreach($resultat as $commande) {
        print_r($commande);
    }
} else {
    echo "Erreur : " . mysqli_error($connexion);
}

?>