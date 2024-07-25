<?php
$voitures = [
    [
        'nom' => 'C3',
        'modele' => '2023',
        'marque' => [
            'nom' => 'Citroën',
            'ville' => [
                'nom' => 'Paris',
                'latitude' => 0.785,
                'longitude' => 1.865,
            ],
            'chiffreAffaires' => 13679403,
        ],
    ],
    [
        'nom' => 'GLE',
        'modele' => '2023',
        'marque' => [
            'nom' => 'Mercedes',
            'ville' => [
                'nom' => 'Berlin',
                'latitude' => 0.785,
                'longitude' => 1.865,
            ],
            'chiffreAffaires' => 97324546804,
        ],
    ],
    [
        'nom' => 'Dacia',
        'modele' => '2012',
        'marque' => [
            'nom' => 'Renault',
            'ville' => [
                'nom' => 'Poitiers',
                'latitude' => 0.785,
                'longitude' => 1.865,
            ],
            'chiffreAffaires' => 5000,
        ],
    ]
];

// Lister les voitures : nom, modele
// Ajouter nom de la marque

foreach($voitures as $voiture){
    echo 'Nom : ' . $voiture['nom'] . ' ' . 'Modèle : ' . $voiture['modele'] . '<br>';
        //print_r($marque);
    echo 'Marque : ' . $voiture['marque']['nom'] . '<br>';
    echo 'Marque : ' . $voiture['marque']['ville']['latitude'] . '<br>';
}
?>