<?php
//CREER une session
session_start();

$_SESSION['user'] = $_POST['user_name'];
$_SESSION['mail'] = $_POST['email'];
$_SESSION['password'] = $_POST['password'];

//print_r($_SESSION["user"]);
echo 'Nom d\'utilisateur enregistré dans la session : ' . $_SESSION["user"] . '<br>';

// RECUPERER les données du formulaire
//print_r($_POST['user_name']);

$_POST['user_name'];
$_POST['email'];
$_POST['password'];

// ECRIRE "Le mot de passe de l'utilisateur .............. est ...............".
echo 'Le mot de passe de l\'utilisateur ' . $_SESSION['user'] . ' est : ' . $_SESSION['password'];

?>