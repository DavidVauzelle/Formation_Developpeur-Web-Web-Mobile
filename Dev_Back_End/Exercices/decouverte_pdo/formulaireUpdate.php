<?php

require_once 'connexion.php';

$id=$_GET['id'];

$requete="SELECT * FROM famille_tbl WHERE id=$id";
$infos=$bdd->query($requete);
$resultat=$infos->fetch(PDO::FETCH_ASSOC);

?>

<form action="testUpdate.php" method="get">

    <div>
        <label for="text">Prenom : </label>
        <input type="text" name="prenom" value="<?php echo $resultat['prenom']?>">    
    </div>
    
    <div>
        <label for="text">Nom : </label>
        <input type="text" name="nom" value="<?php echo $resultat['nom']?>">    
    </div>

    <div>
        <label for="text">ID</label>
        <input type="hidden" name="id" value="<?php echo $id;?>">
    </div>
    
    <div>
        <input type="submit" value="Envoyer">    
    </div>

</form>