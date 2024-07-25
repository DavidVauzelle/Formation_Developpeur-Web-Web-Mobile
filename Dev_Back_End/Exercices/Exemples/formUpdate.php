<?php
require_once("bd.php");


$id=$_GET['id'];

$requete="SELECT * FROM famille_tbl WHERE id=$id";
$infos=$bdd->query($requete);
$resultat=$infos->fetch(PDO::FETCH_ASSOC);

// var_dump($resulat);

?>

<form action="traitementUpdate.php" method="GET">

    Nom
    <input type="text" name="nom" value="<?php echo $resultat["nom"];?>">

    <br>

    Prenom
    <input type="text" name="prenom" value="<?php echo $resultat["prenom"];?>">

    <br>

    <input type="hidden" name="id" value="<?php echo $id;?>">


    <input type="submit">

</form>