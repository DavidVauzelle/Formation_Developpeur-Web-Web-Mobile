<!DOCTYPE html>
<?php

// Appel du fichier de connexion à la base de données
include "./connexion.php";


// Création de la requête pour récupérer seulement les colonnes ville_id, ville_nom et ville_code_postal dans la table villes_france_free 
$requete='SELECT ville_id, ville_nom, ville_code_postal FROM villes_france_free';


// Stockage des résulats de la requête
$reponse = $pdo->query($requete);
?>

<html>
	<head>
        <meta charset="UTF-8">
    </head>
	<body>
		<!-- Lien vers la page d'ajout d'une ville  -->
		<a href="./ajout_ville.php">Ajouter une ville</a>
		<table style="border-collapse: collapse;">
			<thead>
				<tr>
					<th style="border-right: 1px solid black; background-color: #D3D3D3;">Ville</th>
      				<th style="border-right: 1px solid black; background-color: #D3D3D3;">Code Postal</th>
      				<th style="background-color: #D3D3D3;">Actions</th>
				</tr>
			</thead>
			<tbody>
				<!-- Boucle sur les résultats de la requête SELECT -->
				<?php foreach ($reponse as $key => $value): ?>
					<tr style="border: 1px solid black;">
						<!-- Affichage du nom de la ville  -->
						<td style="border-right: 1px solid black;"><?php echo $value['ville_nom']; ?></td>

						<!-- Affichage du code postal de la ville  -->
	            		<td style="border-right: 1px solid black;"><?php echo $value['ville_code_postal']; ?></td>

	            		<td>
	            			<!-- Lien vers la modification de la ville avec en paramètre dans l'url l'id de la ville -->
	            			<a href="./modifier_ville.php?id=<?php echo $value['ville_id'] ?>">Modifier</a>

	            			<!-- Lien vers la suppression de la ville avec en paramètre dans l'url l'id de la ville -->
	            			<a href="./supprimer_ville.php?id=<?php echo $value['ville_id'] ?>">Supprimer</a>

	            		</td>
					</tr>
				<!-- Fermeture de la boucle -->
				<?php endforeach; ?>
			</tbody>
		</table>
	</body>
</html>