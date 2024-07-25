<!DOCTYPE html>
<?php

// Condition de test si les paramètres 'nom', 'code' et 'departement' existent dans la variable globale POST
if(isset($_POST['nom']) && isset($_POST['code']) && isset($_POST['departement']))
{
	// Appel du fichier de connexion à la base de données
	include "./connexion.php";

	// Création de la requête d'insertion d'une nouvelle ville avec pour paramètre le nom, le code et le département récupérés depuis la variable globale POST
	$requete = "INSERT INTO villes_france_free (ville_nom, ville_code_postal, ville_departement) 
				VALUES ('" . $_POST['nom'] . "', '". $_POST['code'] ."', '" . $_POST['departement'] . "')";

	// Exécution de la requête d'insertion
	$pdo->exec($requete);

	// Affichage d'un message de réussite
	echo "<div>L'ajout de la ville a réussi ! </div>";
}

?>

<html>
	<head>
        <meta charset="UTF-8">
    </head>
	<body>
		<!-- Lien vers la page de liste des villes  -->
		<a href="./liste_villes.php">Lister les villes</a>

		<div style="margin-top: 15px;">
			<!-- Création du formulaire avec la méthode POST -->
			<form method="POST" action="">
				<!-- Ajout du champ pour le nom de la ville  -->
				<div>
					<label for="nom">Nom</label>
					<input type="text" name="nom">
				</div>
				<!-- Ajout du champ pour le département de la ville  -->
				<div style="margin-top: 5px;">
					<label for="departement">departement</label>
					<input type="text" name="departement">
				</div>
				<!-- Ajout du champ pour le code postal de la ville  -->
				<div style="margin-top: 5px;">
					<label for="code">Code postal</label>
					<input type="text" name="code">
				</div>
				<br>
				<input type="submit" name="ajouter" value="Ajouter">
			</form>
		</div>
	</body>
</html>