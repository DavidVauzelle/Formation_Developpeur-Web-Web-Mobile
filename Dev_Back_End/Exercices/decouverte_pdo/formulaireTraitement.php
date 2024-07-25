<?php

require_once 'connexion.php';

$nom=$_GET['nom'];
$prenom=$_GET['prenom'];
$statut=$_GET['statut'];
$query="INSERT INTO famille_tbl(nom, prenom, statut) VALUES('$nom', '$prenom', '$statut')";
$execution=$bdd->exec($query);

?>