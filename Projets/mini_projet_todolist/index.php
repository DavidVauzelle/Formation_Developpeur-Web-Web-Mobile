<?php

require_once 'connexion.php';

// Requête SQL pour liste les taches enregistrer dans la bdd
$requete="SELECT * FROM taches;";
$taches=$bdd->query($requete);

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Projet Todolist"> 
    <title>Liste de Taches</title>
</head>
<body>
    <h1>Liste de taches</h1>

    <?php foreach($taches as $tache) : ?>
    <ul>
        <li>
            <?= $tache['nom_tache']; ?>
            <a href="traitementDelete.php?id=<?= $tache['id']; ?>">Supprimer</a>
        </li>
    </ul>    
    <?php endforeach; ?>

    <form action="traitementInsertion.php" method="get">
        <h2>Tache à ajouter</h2>
        <input type="text" name="nom">
        <input type="submit" value="Envoyer">
    </form>    
</body>
</html>