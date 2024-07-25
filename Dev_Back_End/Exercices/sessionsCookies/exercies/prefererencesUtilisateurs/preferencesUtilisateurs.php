<?php
// PARAMETRES cookie session
// session_set_cookie_param(time()+604800);

// CREER une session
session_start();

// echo $_POST['color'];

// CREER un cookie    
//setcookie('color', $_POST['color'], time()+1000000000);
setcookie('color', $_POST['color']);

// AFFICHER cookie
echo 'Thème de couleur : ' . $_COOKIE['color'];

// CONSERVER le cookie après fermeture du navigateur

?>

%23d0aeae