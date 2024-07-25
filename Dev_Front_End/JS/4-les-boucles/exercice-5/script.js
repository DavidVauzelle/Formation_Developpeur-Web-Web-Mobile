// À partir d'une chaîne de caractères donnée, 
// utilisez une boucle pour afficher dans la console le mot 
// avec un tiret - inséré entre chaque lettre.

let mot = "code";
let resultat_mot = "";

// Résultat attendu pour le mot "code", dans la console :
for (let i = 0; i < mot.length; i++) {
    resultat_mot += mot[i];
    if (i !== mot.length - 1) {
        resultat_mot += '-';
    }
}

console.log(resultat_mot);