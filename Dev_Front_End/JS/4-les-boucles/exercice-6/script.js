// Demandez à l'utilisateur de saisir un mot de passe valide (que vous avez défini) en utilisant prompt(). 
// Utilisez une boucle while pour continuer à demander le mot de passe jusqu'à ce que l'utilisateur saisisse le bon. 
// Pour simplifier, considérez un mot de passe en dur dans votre code.

let user_password;
let password = 'azerty';

while (user_password !== password) {
    // Si incorrect, résultat attendu dans la console :
    console.log('Mot de passe incorrect, essayez à nouveau.');
    user_password = prompt('Veuillez entrer le mot de passe :');
} 
// Si correct, résultat attendu dans la console : 
console.log('Accès autorisé.'); 

