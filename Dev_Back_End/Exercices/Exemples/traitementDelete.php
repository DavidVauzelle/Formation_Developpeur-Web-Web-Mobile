<?php

require_once("bd.php");

$id=$_GET["id"];

$requete="delete from famille_tbl where id = $id";

$bdd->exec($requete);
