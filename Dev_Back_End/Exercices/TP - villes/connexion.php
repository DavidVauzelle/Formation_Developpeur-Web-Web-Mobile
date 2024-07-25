<?php

	// Stockage dans une variable du nom de la base de données
	$database = "exo_ville_ea";

	// Stockage de l'utilisateur de la BDD
	$utilisateur = "root";

	// Stockage du mot de passe de l'utilisateur de la BDD
	$motDePasse = "WebLImpulseB!17";

	// Création et stockage de l'instance PDO pour la connexion à la base de données
	$pdo = new PDO('mysql:host=localhost;dbname='. $database .';charset=utf8', $utilisateur, $motDePasse, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

?>