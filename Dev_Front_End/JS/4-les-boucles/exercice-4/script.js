// Demandez à l'utilisateur de répondre par "oui" ou "non" 
// à la question posée via prompt() "Est-ce que vous aimez JavaScript ?". 
// Utilisez une boucle while pour continuer à lui poser la question jusqu'à ce qu'il réponde "oui".

let question_js = prompt("Est-ce que vous aimez JavaScript ? (oui/non)");

// Résultat attendu dans la console :
while (question_js !== "oui") {
    question_js = prompt("Est-ce que vous aimez JavaScript ? (oui/non)");
}