<?php

require_once 'connexion.php';

$nom_tache = $_GET['nom'];
$requete = "INSERT INTO taches (nom_tache) VALUES ('$nom_tache')";
$bdd->exec($requete);

header('Location: index.php');