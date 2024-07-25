<?php

    $prenom = 'Dadi';

    // Déclaration d'une fonction d'affichage
    function ditBonjour($prenom)
    {
        echo 'Bonjour ' . $prenom . '<br>';
    }

    // Execution de la fonction
    ditBonjour($prenom);

    // Déclaration de la fonction d'addition
    function additionner($nombre1, $nombre2)
    {
        $addition = $nombre1 + $nombre2;
        return $addition;
    }

    // Appel de la fonction d'addition avec 2 paramètres
    echo additionner(5, 8) . '<br>';

    // Déclaration de la fonction de calcul de mètres cubes
    // Nombre de m3 = longeur * largeur * hauteur
    function calculMetresCubes($longeur, $largeur, $hauteur)
    {
        $calcul = $longeur * $largeur * $hauteur;
        return $calcul;
    }

    // Appel de la fonction de calcul de mètres cubes
    echo calculMetresCubes(50, 75, 100) . ' m3' . '<br>';

    // Déclaration du tableau de fruits
    $fruits = ['pomme', 'banane', 'orange'];
  
    // Déclaration de la fonction qui liste le tableau de fruits
    function listeFruits($fruits)
    {
        // Retourne la liste des fruits dans une chaine de caractère (string)
        $listeFruits = '';

        // Boucle sur la liste des fruits
        foreach ($fruits as $fruit) {
            $listeFruits .= $fruit . ' - ';
        }

        return $listeFruits;
    }
    // Affichage de la liste de fruits
    echo listeFruits($fruits);

?>