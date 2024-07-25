<?php
    /*Créez une variable et assignez-lui une phrase simple.
    Utilisez echo pour afficher cette phrase.*/

    $phrase = 'Hello World';
    // echo $phrase;

    /*Créez deux variables, chacune contenant un nombre.
    Additionnez ces deux nombres et stockez le résultat dans une troisième variable.
    Affichez le résultat.*/

    $a = 5;
    $b = 8;
    $addition = $a + $b;

    // echo $addition;
    
    // Concaténer ce résultat avec la chaine de caractère du 1er exercice.
    echo $phrase . ' ' . $addition . '<br>';
    
    /* Créer un tableau avec les liste des apprenants de la formation.
    Chaque apprenant dispose d'un prénom, d'un age, d'un lieu d'habitation, 
    d'une adresse mail et d'un numéro de téléphone. 
    Vous pouvez mettre des fausses données dans le tableau*/

    $apprenants = [
        [
        'prenom' => 'David',
        'age' => 18,
        'lieu' => 'Chasseneuil',
        'mail' => 'd.vauz86@gmail.com',
        'telephone' => '0781660679',
        ],
        [
            'prenom' => 'Franck',
            'age' => 57,
            'lieu' => 'Vouille',
            'mail' => 'franck.r@gmail.com',
            'telephone' => '0700000000',
        ],
        [
            'prenom' => 'Yannick',
            'age' => 50,
            'lieu' => 'Poitiers',
            'mail' => 'yannick86@gmail.com',
            'telephone' => '0600000000',
        ],
        [
            'prenom' => 'Dylan',
            'age' => 2,
            'lieu' => 'Chasseneuil',
            'mail' => 'dylan.b@gmail.com',
            'telephone' => '0610203040',
            ]
        ];

    // print_r($apprenants);

    /* Afficher les caractéristiques de chaque apprenant avec un libellé. Ex : Le prénom est .... 
    "Prenom" a "..." ans et habite à ..... Son adresse mail est : ....  et son numero de téléphone est.... */

    foreach ($apprenants as $apprenant) { 
        if ($apprenant['age'] > 20) {
            echo 
            'Le prénom est : ' . $apprenant['prenom'] . ' ' . '<br>' .
            'Age : ' . $apprenant['age']. ' ' . '<br>' . 
            'Lieu : ' . $apprenant['lieu']. ' ' . '<br>' . 
            'Mail : ' . $apprenant['mail']. ' ' . '<br>' . 
            'Téléphone : ' . $apprenant['telephone'] . '<br>';
        }
        elseif (
            $apprenant['age'] >= 3 
            && $apprenant['age'] < 20
            ) {
            echo ($apprenant['prenom']) . ' n\'est pas majeur' . '<br>';
        }
        else {
            echo ($apprenant['prenom']) . ' est un gros bébé' . '<br>';
        }
    }
?>