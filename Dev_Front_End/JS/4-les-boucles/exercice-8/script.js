/*
Définissez un nombre secret à deviner. 
Demandez à l'utilisateur de deviner ce nombre avec prompt(). 
Tant qu'il ne trouve pas le nombre, redemandez lui en indiquant si son essai est trop grand ou trop petit. 
Lorsqu'il trouve, informez le avecalert() qu'il a gagné.
*/

/*
L'utilisateur saisit 9, résultat attendu dans la console : 
Trop grand

L'utilisateur saisit 7, résultat attendu dans la console : 
Félicitations, vous avez trouvé !
*/

// Déclaration du nombre secret
let nombre_secret = 8;
let nombre_secret_utilisateur;

// Demander un nombre à l'utilisateur
nombre_secret_utilisateur = prompt('Quel est le nombre secret');

// L'utilisateur saisit un nombre trop petit, 
// résultat attendu dans la console : Trop petit

while (nombre_secret_utilisateur !== nombre_secret) {
    // L'utilisateur saisit un nombre trop petit, 
    // résultat attendu dans la console : Trop petit
    if (nombre_secret_utilisateur < nombre_secret) {
        console.log('Trop petit');
        nombre_secret_utilisateur = prompt('Quel est le nombre secret');
    } else if (nombre_secret_utilisateur > nombre_secret){
    // L'utilisateur saisit un nombre trop grand, 
    // résultat attendu dans la console : Trop grand
        console.log('Trop grand');
        nombre_secret_utilisateur = prompt('Quel est le nombre secret');
    } else {
        console.log('Félicitations, vous avez trouvé !');
    }
}

