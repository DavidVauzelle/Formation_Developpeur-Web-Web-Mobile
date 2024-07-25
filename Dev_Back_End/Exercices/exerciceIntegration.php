<?php

$animaux = [
    [
        'espece' => 'Lion',
        'taille' => '1.2m',
        'cri' => 'Rugissement',
        'description' => 'Le lion est un grand félin de la famille des félidés.',
        'url' => 'https://fr.wikipedia.org/wiki/Lion'
    ],
    [
        'espece' => 'Éléphant',
        'taille' => '3m',
        'cri' => 'Barrit',
        'description' => 'L\'éléphant est le plus grand mammifère terrestre vivant.',
        'url' => 'https://fr.wikipedia.org/wiki/Éléphant'
    ],
    [
        'espece' => 'Chien',
        'taille' => '0.5m',
        'cri' => 'Aboiement',
        'description' => 'Le chien est un mammifère domestique, l\'un des animaux de compagnie les plus populaires.',
        'url' => 'https://fr.wikipedia.org/wiki/Chien'
    ]
];

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Exerciec intégration">
    <title>Liste d'animaux</title>
</head>
<body>
        <?php foreach($animaux as $animal) : ?>
            <section>
                <h2><?= $animal['espece']; ?></h2>
                <p><?= $animal['taille']; ?></p>
                <p><?= $animal['cri']; ?></p>
                <p><?= $animal['description']; ?></p>
                <a href="<?= $animal['url']; ?>" target="_blank">Pour plus d'informations</a>    
            </section>
        <?php endforeach; ?>
</body>
</html>