<?php

require_once 'connexion.php';

$id = $_GET['id'];

$requete = "DELETE from taches WHERE id = $id";

$bdd->exec($requete);

header('Location: index.php');