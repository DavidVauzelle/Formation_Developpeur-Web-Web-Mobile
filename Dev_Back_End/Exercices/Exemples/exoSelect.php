<?php
require_once 'bd.php';

$requete="select * from famille_tbl";
$reponses=$bdd->query($requete);

foreach($reponses as $reponse) {
    $nom=$reponse["nom"];
    $prenom=$reponse["prenom"];

    echo "mon nom est $nom et le prénom est $prenom <br>";
}
?>