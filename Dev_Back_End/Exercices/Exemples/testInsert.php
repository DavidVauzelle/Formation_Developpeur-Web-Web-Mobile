<?php

require_once 'bd.php';

$requete="INSERT INTO famille_tbl(nom,prenom) VALUES ('Dupont','Marie')";

$bdd->exec($requete);

?>