<?php
require_once("bd.php");

$requete="UPDATE famille_tbl SET prenom='bobby' WHERE id=2";

$bdd->exec($requete);


?>