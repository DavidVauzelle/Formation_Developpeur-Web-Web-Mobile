<?php

require_once("bd.php");

$prenom=$_GET['prenom'];
$id=$_GET["id"];
$nom=$_GET["nom"];


$requete="UPDATE famille_tbl SET prenom='$prenom',nom='$nom' WHERE id=$id";

$bdd->exec($requete);


?>
