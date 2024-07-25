<h1>Formation</h1>
<?php
    // Déclaration de la variable $prenom et affectation d'une chaine de caractères
    $prenom = ' <strong>David.</Strong>';
    // On affiche une phrase qui intègre la variable "Prénom"
    echo 'Le prenom est :' . $prenom . ' C\'est un beau prénom.';
?>
<br>
<?php
    // Déclaration des variables $nombreAnneesCollege... et affectation des années en entier
    $nombreAnneesCollege = (int) 5;
    $nombreAnneesLycee = (int) 2;
    $nombreAnneesUniversite = (int) 8;

    // Déclaration de la variable $nombreAnneesActivite et affectation de l'addition des $nombreAnnees...
    $anneesActivite = $nombreAnneesCollege + $nombreAnneesLycee + $nombreAnneesUniversite;
    // Affiche $anneesActivite dans une phrase de présentation
    echo 'Je suis en activité de formation et professionnelle depuis : ' . $anneesActivite . ' ans';
?>
<br>
<?php
// Déclaration des variables $a et $b et affectation de nombres
$a = (int) 5;
$b = (int) 10;

// Incrémentation des variables $a et $b
$a++; // $a : 5 + 1 = 6
// Nécessite plus de ressources, mais moins que $nombre = $a + 1
++$b; // $b : 10 + 1 = 11
// Nécessite moins de ressources

// Supérieur à
if ($b > $a) {
    // Alors afficher que $b est supérieur à $a
    echo $b . ' est supérieur à ' . $a;
}
// Sinon
else {
    // Alors afficher que $b n'est pas supérieur à $a
    echo $b . ' n\'est pas supérieur à ' . $a;
}
?>
<br>
<?php
// Affiche : 1 2 3 4 5
for ($i = 1; $i <= 5; $i++) {
    echo $i . ' ';
}
?>
<br>
<?php
// Tables de multiplication
/*
 
Fonctionnalité attendue : Affichage à l'écran des tables de mutliplication comme ci-dessous :
----------------------------------------------------------
 
<h3>Table de 1</h3>
<ul>
    <li>1 * 1 = <strong>1</strong></li>
    <li>2 * 1 = <strong>2</strong></li>
    <li>3 * 1 = <strong>3</strong></li>
...
 
<h3>Table de 2</h3>
<ul>
    <li>1...
    <li>2...
    <li>3...
</ul>

<h3>Table de 3</h3>
<ul>
    <li>1...
    <li>2...
    <li>3...
</ul>
-----------------------------------------------------------
*/

// Déclaration et attribution des variables 
$compteurTable = 1;
$compteurMultiplicateur = 1;

// Déclaration et attribution des variables 
$nombreDeTables = 10;
$nombreDeMultiplicateur = 10;


/*for ($compteurTable = 1; $compteurMultiplicateur = 1;)
    if ($compteurMultiplicateur <= 10) {
        ++$compteurMultiplicateur
        echo $compteurTable * $CompteurMultiplication;
    }
*/

for ($compteurTable = 1; $compteurTable <= $nombreDeTables; $compteurTable++) {
    echo '<ul>Table de ' . $compteurTable.'<br></ul>';
}
?>
<?php
    $premiereBoucleCompteur = 1;
    $deuxiemeBoucleCompteur = 1;

for (
    $premiereBoucleCompteur = 1;    // L'état du compteur au départ de la boucle
    $premiereBoucleCompteur <= 5;   // Tant que le compteur est inférieur ou égal à 5
    ++$premiereBoucleCompteur       // A chaque itération de boucle, ajoute 1 au compteur
) {
    echo '      -> première boucle : ' . $premiereBoucleCompteur . '<br>';  // Affiche la valeur du compteur

    for (
        $deuxiemeBoucleCompteur = 1;    // L'état du compteur au départ de la boucle
        $deuxiemeBoucleCompteur <= 5;   // Tant que le compteur est inférieur ou égal à 5
        ++$deuxiemeBoucleCompteur       // A chaque itération de boucle, ajoute 1 au compteur
    ) {
        echo '      -> deuxième boucle : ' . $deuxiemeBoucleCompteur . '<br>';
    }
}
?>
<?php
    $table = 1;
    $multiplicateur = 1;

    /* 
    $table = 1;     // L'état du compteur au départ de la boucle
    $table <= 10;   // Tant que le compteur est inférieur ou égal à 10
    ++$table;       // A chaque itération de boucle, ajoute 1 au compteur
    $resultat = $table * $multiplicateur
    */

for ($table = 1; $table <= 10; ++$table) {

    echo '<h3>Table de multiplication ' . $table . '</h3>';  // Affiche la valeur du compteur

    echo '<ul>';

    for ($multiplicateur = 1; $multiplicateur <= 10; ++$multiplicateur) {
        $resultat = $table * $multiplicateur; 
        echo '
            <li>' . $table . ' * ' . $multiplicateur . ' = ' . $resultat .  '</li>
        ';
    }
}

    echo '</ul>';
?>