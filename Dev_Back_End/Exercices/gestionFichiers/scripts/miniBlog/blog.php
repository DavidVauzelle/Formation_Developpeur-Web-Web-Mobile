<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>miniBlog</title>
</head>
<body>
    <h1>Mon super blog !!!</h1>

    <?php
    $articles = scandir('./blog');
    //print_r($articles);
    foreach ($articles as $article) {
        // Lire le contenu de l'article
        // Afficher le contenu de l'article 
        echo file_get_contents('./blog/' . $article) . '<br>';
    }
    ?>

</body>
</html>

