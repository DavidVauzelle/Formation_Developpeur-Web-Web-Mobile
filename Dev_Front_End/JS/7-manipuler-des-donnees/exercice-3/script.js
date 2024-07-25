// A partir d’un tableau qui contient une liste d’animaux, 
// afficher les séparés par une virgule, 
// mais dans le sens inverse et en majuscules (⚠️ regardez bien l’exemple).

const mots = [
    "chat",
    "chien",
    "oiseau",
    "poisson",
    "souris",
    "lapin",
    "tortue",
    "poule"
];

// Résultat attendu :
"POULE, TORTUE, LAPIN, SOURIS, POISSON, OISEAU, CHIEN, CHAT"

// // Inverser les données
// mots.reverse();
// console.log(mots);

// // Tableau en chaine de caractère
// motsInverses = (mots.join(', '));
// console.log(motsInverses);

// // Tout en majuscule
// motsInversesMajuscules = (motsInverses.toUpperCase());
// console.log(motsInversesMajuscules);

function motsInversesMajuscules(mots) {
    return mots.reverse().join(', ').toUpperCase();
}
console.log(motsInversesMajuscules(mots));

