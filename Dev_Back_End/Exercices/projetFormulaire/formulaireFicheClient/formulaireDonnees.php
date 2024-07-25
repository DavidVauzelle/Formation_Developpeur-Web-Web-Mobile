<?php

if (!empty($_POST)) {
    echo 'Non : ' . $_POST['name'] . '<br>';
    echo 'Prénom : ' . $_POST['prenom'] . '<br>';
    echo 'Date : ' . $_POST['date'] . '<br>';
    echo 'Email : ' . $_POST['email'] . '<br>';
    echo 'Newsletter : ' . $_POST['newsletter'] . '<br>';
    
    echo 'Produits : ';
    foreach ($_POST['produits'] as $produit) {
        echo ($produit) . ' ';
    }
    /*echo 'Produits : ' . $_POST['produits'] . '<br>';*/
}
   
// Chemin vers le fichier texte
$cheminFichier = "monFichier.txt";

// Contenu à écrire dans le fichier
$contenu = $_POST['name'] . '
' . $_POST['prenom'] . ' 
' . $_POST['date'] . '
' . $_POST['email'] . '
' . $_POST['newsletter'] . ' 
';

foreach ($_POST['produits'] as $produit) {
    $contenu .= $produit . ' ';
}

// Ouvrir le fichier en mode écriture ('w' pour écraser le contenu existant)
$fichier = fopen($cheminFichier, "w");

// Écrire le contenu dans le fichier
fwrite($fichier, $contenu);

// Fermer le fichier
fclose($fichier);
echo "Le contenu a été écrit avec succès dans le fichier.";

?>