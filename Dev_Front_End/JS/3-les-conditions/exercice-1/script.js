// Demandez à l'utilisateur son âge avec prompt() et affichez si l'utilisateur est mineur ou majeur.
let age = parseInt(prompt('Quel est votre age ?'));

// Résultat attendu dans la console, si l'âge < 18 : Vous êtes mineur.
// Résultat attendu dans la console, si l'âge >= 18 : Vous êtes majeur.

if (age < 18) {
    console.log('Vous êtes mineur.');
} else {
    console.log('Vous êtes majeur.');
}