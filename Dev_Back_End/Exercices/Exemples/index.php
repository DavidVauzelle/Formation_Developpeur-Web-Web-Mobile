<a href="formInsert.php">ajouter</a>

<h1>Liste des membres</h1>
<?php


require_once 'bd.php';

$requete="select * from famille_tbl";
$reponses=$bdd->query($requete);

foreach($reponses as $reponse) {
    $nom=$reponse["nom"];
    $prenom=$reponse["prenom"];
    $id=$reponse["id"];

    echo "mon nom est $nom et le prénom est $prenom";

    echo " <a href='formUpdate.php?id=$id'>[modifier]</a> ";
    echo " <a href='traitementDelete.php?id=$id'>[supprimer]</a> ";

    echo "<br>";

}


?>