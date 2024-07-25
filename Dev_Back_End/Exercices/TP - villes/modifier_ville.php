<!DOCTYPE html>
<?php

// Appel du fichier de connexion à la base de données
include "./connexion.php";

// Condition de test si le paramètre 'code' existe dans la variable globale POST
if(isset($_POST['code']))
{
	// Création de la requête de modification d'une ville avec pour paramètre le code récupéré depuis la variable globale POST et le paramètre 'id' pour cibler la ville récupérée depuis la variable globale GET
	$requete = "UPDATE villes_france_free SET ville_code_postal = '" . $_POST['code'] . "' WHERE ville_id = " . $_GET['id'];

	// Exécution de la requête de modification
	$pdo->exec($requete);

	// Redirection de l'utilisateur vers la page liste_villes
	header("Location: liste_villes.php");
}

// Condition de test si le paramètre 'id' existe dans la variable globale GET
if(isset($_GET['id']))
{
	// Création de la requête de sélection de la ville avec le paramètre 'id' de la variable globale GET
	$requete = "SELECT ville_nom, ville_code_postal FROM villes_france_free WHERE ville_id = " . $_GET['id'];

	// Exécution et récupération de la ville souhaitée
	$reponse = $pdo->query($requete)->fetch();
}
else
{
	// Redirection de l'utilisateur vers la page liste_villes
	header("Location: liste_villes.php");
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
			<!-- Affichage du nom de la ville  -->
			<div>
				<p>Nom : <?php echo $reponse["ville_nom"]; ?></p>
			</div>
			<!-- Création du formulaire avec la méthode POST -->
			<form method="POST" action="">
				<!-- Ajout du champ pour le code postal de la ville  -->
				<div style="margin-top: 5px;">
					<label for="code">Code postal</label>
					<input type="text" name="code" value="<?php echo $reponse["ville_code_postal"]; ?>">
				</div>
				<br>
				<input type="submit" name="enregistrer" value="Enregistrer">
			</form>
		</div>
	</body>
</html>