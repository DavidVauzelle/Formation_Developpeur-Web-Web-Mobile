<?php
 
// Connexion à la BDD
 
// Paramètres de connexion à la base de données
$serveur = "localhost";
$utilisateur = "root";
$motdepasse = "";
$nomBaseDeDonnees = "bd_liste_de_courses";
 
// Connexion à la base de données
$connexion = mysqli_connect($serveur, $utilisateur, $motdepasse, $nomBaseDeDonnees);
 
if (!$connexion) {
    die("Connexion échouée : " . mysqli_connect_error());
}
 
 
// Traitement form listeTaches
if (isset($_POST['produits']) && isset($_POST['nom_produit'])) {
    // print_r($_POST);
    // Retour de $_POST : 12 => on, 5 => on, listeTaches => true
 
    // Mettre les checkbox des taches à non cochées
    $sql = 'UPDATE nom_produit SET etat = 0';
    mysqli_query($connexion, $sql);
 
    // Boucler sur les id provenant du formulaire pour mettre à jour la base
    foreach ($_POST['nom_produit'] as $key => $value) {
        //print_r($_POST);
        $sql = "UPDATE nom_produit SET etat = 1 WHERE id = '$key'";
        mysqli_query($connexion, $sql);
    }
 
}
 
// Traitement form ajoutTache
if (isset($_POST['ajoutTache'])) {
 
    // Récupération du titre de la tache du formulaire
    $titre = $_POST['nom_produit'];
 
    // Enregistrement en BDD de la tache
    $sql = 'INSERT INTO nom_produit (nom, etat) VALUES ("' . $nom . '", 0)';
    echo $sql;
    mysqli_query($connexion, $sql);
}
 
 
 
// HTML : Header
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>
</head>
<body>
 
<!-- Affichage du form listeTaches -->
<form action="" method="post">
<?php
    $sql = "SELECT * FROM produit";
    $resultat = mysqli_query($connexion, $sql);
   
    foreach ($resultat as $produit) {
 
        // Mettre checked si la tache en BDD est "fait" = true
        $caseCheck = '';
        if ($etat['etat'] == 1) {
            $caseCheck = 'checked';
        }
        echo '<input type="checkbox" name="etat[' . $etat['id'] . ']" value="' . $etat['id'] . '"  ' . $caseCheck . ' />';
 
       
        echo $etat['titre'] . '<br />';
       
    }
    ?>
<input type="submit" name="listeTaches">
</form>
 
 
<!-- Affichage du form ajoutTache -->
<form action="" method="post">
<input type="text" name="titre">
<input type="submit" name="ajoutTache">
</form>
 
<!-- HTML : Footer -->
</body>
</html>