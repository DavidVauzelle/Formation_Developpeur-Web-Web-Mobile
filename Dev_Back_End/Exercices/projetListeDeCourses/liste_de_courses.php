<?php 

print_r($_POST);

// Paramètres de connexion 
$serveur = "localhost"; 
$utilisateur = "root"; 
$mot_de_passe = ""; 
$base_de_donnees = "bd_liste_de_courses"; 

// Établir la connexion
$connexion = mysqli_connect($serveur, $utilisateur, $mot_de_passe, $base_de_donnees);

// Vérifier la connexion 
if (!$connexion) { 
    die("Échec de la connexion : " . mysqli_connect_error()); 
} else { 
    // echo "Connexion réussie à la base de données."; 
}

// Vérification si le formulaire est soumis
if (isset($_POST['nom_produit'])) {
    echo `le formulaire est soumis`;
} else {
    echo `le formulaire n'a pas été soumis`;
}

// Requête pour mettre à jour les états dans la bdd à la soumission du formulaire
// $sql = "UPDATE $id_produits FROM $produits===[ON], etat=[1]";
// $resultats = mysqli_query($connexion, $sql);

if(isset($_POST['nom_produit'])) {
    // $sql = "UPDATE $produits(['etat']) FROM $produits, etat=[1]";
    // $sql = "UPDATE $produits SET etat=1 WHERE nom_produit = '$nom_produit'";
    $sql = "UPDATE $produits($produit[etat]) SET etat = 1 WHERE nom_produit = '$id_produit'";
} else {
    echo 'Pas de données à mettre à jour';
}

// Requête pour afficher tous les produits
$sql = "SELECT * FROM produits";
$resultats = mysqli_query($connexion, $sql);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Liste de courses</title>
</head>


<body>
    <h1>Liste de courses</h1>
    <br>
    <form action="" method="post">

<?php

// Afficher le résultat sur le navigateur
if ($resultats) {
    // print_r($resultat);
    foreach ($resultats as $produit) {
        echo 
        '<input type="checkbox" id="' . $produit['nom_produit'] . '" name="' . $produit['id_produit'] . '">
        <label for="' . $produit['nom_produit'] . '">' . 
        $produit['nom_produit'] . 
        '<br></label>';
    }

    echo '<br><input type="submit" value="Enregistrer">';

} else {
    echo "Erreur : " . mysqli_error($connexion);
}

?>   
    </form> 
</body>
</html>

<!-- <form action="" method="post">
    <div>
        <input type="checkbox" id="produit1" name="nom_produit">
        <label for="produit1">Baguette</label> 
    </div>
    <div>
        <input type="checkbox" id="produit2" name="nom_produit">
        <label for="produit2">Eau</label> 
    </div>
    <div>
        <input type="checkbox" id="produit3" name="nom_produit">
        <label for="produit3">Viande</label> 
    </div>
    <div>
        <input type="checkbox" id="produit4" name="nom_produit">
        <label for="produit4">Pâtes</label> 
    </div>
    <div>
        <input type="checkbox" id="produit5" name="nom_produit">
        <label for="produit5">Gel douche</label> 
    </div>
    <div>
        <input type="submit" value="Enregistrer">    
    </div>
</form> -->



                
    