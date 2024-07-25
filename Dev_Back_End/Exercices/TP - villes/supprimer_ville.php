<?php

// Condition de test si le paramètre 'id' existe dans la variable globale GET
if(isset($_GET['id']))
{
	// Appel du fichier de connexion à la base de données
	include "./connexion.php";
	
	// Création de la requête de suppression de la ville avec le paramètre 'id' de la variable globale GET
	$requete = "DELETE FROM villes_france_free WHERE ville_id = " . $_GET['id'];

	// Exécution de la requête de suppression
	$pdo->exec($requete);
}

// Redirection de l'utilisateur vers la page liste_villes
header("Location: liste_villes.php");

?>