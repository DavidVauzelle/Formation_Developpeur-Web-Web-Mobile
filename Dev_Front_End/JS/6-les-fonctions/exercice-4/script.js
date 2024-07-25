// Créez un fonction qui demande une confirmation à l’utilisateur(confirm()) 
// avec le message : “Avez vous les droits pour accéder aux codes nucléaires ? 
// Soyez honnête s’il vous plait, cela peut être dangereux.”. 
// Si l’utilisateur accepte, afficher une alerte dans la console avec le code de votre choix (ex : 1234). 
// Sinon affichez “vous n’avez pas les droits !!” dans la console.

function confirmation() {
    let resultat = confirm("Avez vous les droits pour accéder aux codes nucléaires ? Soyez honnête s’il vous plait, cela peut être dangereux.");
    
    if (resultat) {
        console.log(1234);
        } else {
            console.log("vous n’avez pas les droits !!");
    }
}

confirmation();

