<?php
require_once("bd.php");

$nom = $_GET["nom"];
$prenom = $_GET["prenom"];

$requete = "INSERT INTO famille_tbl(nom, prenom) VALUES ('$nom','$prenom')";

$bdd->exec($requete);

echo "insertion réussie";
?>