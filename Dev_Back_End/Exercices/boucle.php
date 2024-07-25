<?php
    // Faire une boucle for de 20 itérations permettant d'afficher un compteur de 1 à 20
    // Ajouter en HTML des listes à puces
    echo '<ul>';
    for ($compteur=1; $compteur <= 20 ; $compteur++) {
        echo '<li>' . 'Le compteur est de : ' . $compteur . '</li>
        ';      
    }
    echo '</ul>';

    // Boucler sur le tableau des fruits et afficher chacun d'entres eux
    $fruits = ['Pomme', 'Banane', 'Fraise', 'Orange'];
        
    foreach ($fruits as $fruit) {
            echo $fruit . '<br>';  
    }
?>