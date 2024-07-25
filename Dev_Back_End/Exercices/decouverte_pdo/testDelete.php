<?php

require_once 'connexion.php';

$id=$_GET['id'];
$query="DELETE FROM famille_tbl WHERE id=$id";
$execution=$bdd->exec($query);

?>