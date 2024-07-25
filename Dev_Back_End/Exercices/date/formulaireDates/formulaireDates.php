<?php

if (!empty($_POST)) {
    // Etape 1 : Transformer les dates en timestamp
    $dateActuelle = date("Y-m-d");
    $dateActuelleTimestamp = strtotime($dateActuelle);
    $dateNaissance = $_POST['naissance_date'];
    $dateAnniversaireTimestamp = strtotime($dateAnniversaire);

    // Récupération de la date du prochaine anniversaire
    $dateNaissanceTableau = explode("-", $dateNaissance);
    print_r($dateNaissanceTableau);

    // 2024-09-18
    $dateAnniversaire = date("Y") . '-' . $dateNaissanceTableau[1] . '-' . $dateNaissanceTableau[2]; // 2024-09-18

    // Affichage du nombre de jours restant avant la date anniversaire
    $timesstampAvantAnniversaire = $dateActuelleTimestamp - $dateAnniversaireTimestamp;
        echo $timesstampAvantAnniversaire;

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire date anniversaire</title>
</head>
<body>
<form action="" method="post">
    <h2>Qelle est votre date de naissance ?</h2>
    <div>
        <label for="date">Votre date de naissance : </label>
        <input type="date" id="date" name="naissance_date" />
    </div> 
    <div class="button">
        <button type="submit">Envoyer le message</button>
    </div>
</form>    
</body>
</html>