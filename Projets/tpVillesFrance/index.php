<?php

require_once 'connexion.php';

// Requête SQL pour récupérer le nom et code postaux des villes de France
$requete="SELECT ville_nom, ville_code_postal FROM villes_france_free;";
$resultats=$bdd->query($requete);

?>
    <table>
    <tr>
        <th>Ville</th>
        <th>Code Postal</th>
    </tr>
    <?php foreach($resultats as $resultat) : ?>
        <?php echo "<tr>"; ?>
            <?php echo "<td>" . $resultat['ville_nom'] . "</td>"; ?>
            <?php echo "<td>" . $resultat['ville_code_postal'] . "</td>"; ?>
        <?php echo "</tr>"; ?>
    <?php endforeach; ?>
    </table>
