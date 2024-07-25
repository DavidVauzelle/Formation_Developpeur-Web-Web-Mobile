<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Liste de courses</title>
</head>

<?php 

print_r(isset($_POST));

?>

    <h1>Liste de courses</h1>
    <br> 
        <form action="" method="post">
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
        </form>
