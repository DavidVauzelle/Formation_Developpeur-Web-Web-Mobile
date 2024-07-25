<?php

/*
Objectif : Permettre à l'utilisateur de se connecter à son compte
 
Contenu de la page : 
	Titre de la page : h1 "Connexion au compte utilisateur"
	Formulaire de création de compte : 
		- E-mail (email) : input type text - obligatoire
		- Mot de passe (mot_de_passe) : input type text - obligatoire
		- Bouton "Valider" (valider) : input type submit
 
Action à la validation du formulaire :
	- Détecter la validation formulaire
	- Récupérer les données du formulaire : email, mot_de_passe
	- Vérification de l'existance d'un utilisateur en base avec l'email et le mot de passe correspond
*/
 
 
// 5) Connexion à la base
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
// print_r ($_POST);

if (isset($_POST['Envoyer'])) {
    $email = $_POST['email'];
    $motDePasse = ($_POST['password']);

// 7) Vérifier l'existance de cette utilisateur en base (email, mot de passe)
    $sql = "SELECT * FROM utilisateurs WHERE email = '$email' AND mot_de_passe = '$motDePasse'";
    // echo $sql;
    $resultat = mysqli_query($connexion, $sql);

    // 8) Rediriger vers page accueil-compte.php
    if (mysqli_num_rows($resultat) > 0) {
        // L'utilisateur existe
        session_start();
        $_SESSION['utilisateur'] = 'OK';
        header('Location:accueil-compte.php');
    } else {
        // Utilisateur ou mot de passe incconu
        echo 'Nom d\'utilisateur ou mot de passe inconnu';
    }
    exit();
}

?>
<!-- // 1) Balises HTML -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css"/>
    <title>Connexion Compte Utilisateur</title>
</head>
<body>

    <!-- // 3) Titre de la page -->
    <main class="container-fluid">
        <h1>Connexion du compte utilisateur</h1>

        <!-- // 4) Formulaire de création de compte -->
        <form action="" method="post">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>

            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password" required>

            <input type="submit" name="Envoyer" value="Envoyer">
        </form>  
    </main>  

<!-- // 2) Fin des balises HTML -->
</body>
</html>