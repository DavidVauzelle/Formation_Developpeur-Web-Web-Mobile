// Créez un bouton sur votre page web. Chaque fois que ce bouton est cliqué, un compteur s'incrémente de 1. 
// Affichez la valeur du compteur directement sur la page sous la forme "Compteur : x", où x est la valeur actuelle du compteur.

// Déclaration d'une variable compteur pour l'incrémentation
let compteur = 0;
let textCompteur = document.getElementById("p").innerText;

// Sélection de l'élément button
let elementButton = document.querySelector('button');

// Evènement pour incrémenter un compteur à chaque clique sur le bouton et afficher le compteur.
elementButton.addEventListener('click', function() {
    compteur++;
    elementP.innerText = `Compteur + ${compteur}`;
});

