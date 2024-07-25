<?php

include 'connexion.php';

$nom='Vauzelle';
$prenom='David';
$query="INSERT INTO famille_tbl(Nom, Prenom) VALUES('$nom','$prenom')";
$execution=$bdd->exec($query);

?>