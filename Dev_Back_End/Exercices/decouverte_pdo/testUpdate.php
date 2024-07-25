<?php

require_once 'connexion.php';

$prenom=$_GET['prenom'];
$nom=$_GET['nom'];
$id=$_GET['id'];


$requete="UPDATE famille_tbl SET prenom='$prenom', nom='$nom' WHERE id=$id";

$bdd->exec($requete);

?>