<?php

// Connexion à la base de données
require_once 'connexion.php';

// Traitement Insertion

if (isset($_POST["ville_nom"]) && isset($_POST["ville_departement"])) {
    $query="INSERT INTO villes_france_free(ville_nom, ville_departement) VALUES($_POST[ville_nom], $_POST[ville_departement])";
    $execution=$bdd->exec($query);    
}

?>

<!-- Formulaire HTML -->
<form action="" method="POST">

    <div>
        <label for="text">Ville :</label>
        <input type="text" name="ville">    
    </div>
    
    <div>
        <label for="text">Département :</label>
        <input type="text" name="departement">
    </div>
    
    <div>
        <input type="submit" value="Envoyer">    
    </div>
    
</form>