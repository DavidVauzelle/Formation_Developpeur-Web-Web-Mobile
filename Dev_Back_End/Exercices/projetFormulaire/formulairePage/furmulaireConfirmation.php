<!-- Page qui traitre le formulaire et affiche la confirmation -->
<?php
print_r($_POST);

// Controle du forumulaire

// $_POST est t'il vide ?
if (empty($_POST)) {
    echo 'Le formulaire n\'a pas été soumis correctement';
    exit();
} 

// Existe t'il un $_POST['nom'] et est t'il différent de null
if (isset($_POST['nom'])) {
    echo'Le nom a bien été renseigné';
} else {
    echo 'Erreur sur le champt nom';
    exit();
}

// $_POST['nom'] est t'il inférieur à 80 caractères
if (strlen($_POST['name']) <80) {
    echo'Le nom est inférieur à 80 caractères';
    exit();
}

// Utiliser isset & empty


?>

<h1>Nous avons bien reçu votre message !</h1>
Nom : <?php echo ($_POST["name"]); ?><br>
E-mail : <?php echo ($_POST["email"]); ?><br>
Téléphone : <?php echo ($_POST["tel"]); ?><br>
MESSAGE : <?php echo ($_POST["message"]); ?><br>
Objet : <?php echo ($_POST["objet"]); ?><br>
Secret : <?php echo ($_POST["secret"]); ?><br>
Majeur : <?php echo ($_POST["majeur"]); ?><br>
Loisirs : <?php echo ($_POST["loisirs"]); ?><br>
