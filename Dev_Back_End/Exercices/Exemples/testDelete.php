<?php

require_once("bd.php");

$requete="delete from famille_tbl where id = 1";

$bdd->exec($requete);
