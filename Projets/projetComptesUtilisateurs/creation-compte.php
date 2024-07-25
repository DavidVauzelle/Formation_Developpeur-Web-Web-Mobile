<?php

/*
Objectif : Permettre à l'utilisateur de créer un compte
Contenu de la page :
    Titre de la page : h1 "création de compte utilisateur"
    Formulaire de création de comtpe :
        - Nom (nom) : input type text - obligratoire
        - E-mail (emil) : input type text - obligratoire
        - Mot de passe (mot_de_passe) : input type text - obligratoire
        - Bouton "Valider" (valider) : input type submit

Action à la validation du formulaire :
    - Détecter la validtation du formulaire
    - Récuperer les données du formulaire : nom, email, mode_de_passe
    - Enregistrement des données dans la base : insert sql
*/

// 5) Connexion à la bdd
 
// Paramètres de connexion à la base de données
$serveur = "localhost";
$utilisateur = "root";
$motdepasse = "";
$nomBaseDeDonnees = "comptes_utilisateurs";
 
// Connexion à la base de données
$connexion = mysqli_connect($serveur, $utilisateur, $motdepasse, $nomBaseDeDonnees);
 
if (!$connexion) {
    die("Connexion échouée : " . mysqli_connect_error());
}
// echo 'connexion bdd réussie';


// 6) Vérification de la soumission du formulaire
// print_r($_POST);

// 7) Requête d'insertion dans la table compte
if (isset($_POST['Envoyer'])) {
    $sql = "INSERT INTO utilisateurs (nom, email, mot_de_passe) VALUES ('" . $_POST['nom'] . "', '" . $_POST['email'] . "', '" . $_POST['password'] . "')";
    // echo $sql;
    mysqli_query($connexion, $sql);
}



?>

<!-- // 1) Balises HTML -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css"/>
    <title>Compte Utilisateur</title>
</head>
<body>

    <!-- // 3) Titre de la page -->
    <main class="container-fluid">
        <h1>Création de comptes utilisateurs</h1>

        <!-- // 4) Formulaire de création de compte -->
        <form action="" method="post">
            <label for="nom">Prénom et nom</label>
            <input type="text" name="nom" id="nom" required>

            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>

            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password" required>

            <input type="submit" name="Envoyer" value="envoyer">
        </form>  
    </main>  

<!-- // 2) Fin des balises HTML -->
</body>
</html>
