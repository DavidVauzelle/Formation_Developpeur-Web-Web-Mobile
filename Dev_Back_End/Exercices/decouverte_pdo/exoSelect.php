<?php

include 'connexion.php';

$requete='SELECT * FROM famille_tbl';
$reponses=$bdd->query($requete);

foreach ($reponses as $reponse) {
    echo "Nom : " . $reponse['nom'] . ' ' . $reponse['prenom'] . ' ' . $reponse['statut'] . ' ' . $reponse['dateNaissance'] . "<br>";
}

?>