<?php include('panierDonnees.php'); ?>
<?php include('panierFonctions.php'); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panier</title>
</head>

<body>
    <!-- Affichage du panier client -->  
    <h1>Mon panier</h1>

    <ul>
        <?php foreach ($panier as $fruit) { ?>
        <li>
            Produit : <?php echo $fruit['nom']; ?> -
            Quantité : <?php echo $fruit['quantite']; ?> -
            Prix/Kg HT : <?php echo $fruit['prixKgHT']; ?> € - 
            Prix total HT : <?php echo panierProduitPrixTotalHT($fruit['prixKgHT'], $fruit['quantite']); ?> €
        </li>     
    <?php } ?>  
    </ul>
    <strong>TOTAL PANIER HT : <?php echo panierMontantTotalHT($panier); ?> €</strong><br> 
    <strong>TOTAL PANIER TTC : <?php echo panierMontantTotalTTC($panier, $tauxTVA); ?> €</strong> 

</body>

</html>