<?php
function panierProduitPrixTotalHT($prixKgHT, $quantite)
{
    $prixTotalHT = $quantite * $prixKgHT;
    return $prixTotalHT;
}

function panierMontantTotalHT($panier)
{
    $montantHT = 0;
    foreach ($panier as $fruit) {
        $montantHT += panierProduitPrixTotalHT($fruit['quantite'], $fruit['prixKgHT']);
    }
    return $montantHT;    
}


function panierMontantTotalTTC($panier, $tauxTVA)
{
    // Première façon de faire le calcul de TVA
    //$tauxTVA = panierMontantTotalHT($panier) * $tauxTVA / 100;
    //$montantTTC = panierMontantTotalHT($panier) + $tauxTVA;

    // Deuxième façon de faire la calcul de TVA
    $montantTTC = panierMontantTotalHT($panier) + panierMontantTotalHT($panier) * $tauxTVA / 100;
    return $montantTTC;
}

?>