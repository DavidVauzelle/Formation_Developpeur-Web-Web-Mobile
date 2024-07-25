// Créez un bouton qui, lorsqu'il est cliqué, change la couleur de fond de la page (du <body>). 
// Centrez le bouton au milieu de la page (horizontalement et verticalement).

// Sélection du bouton
let elementButton = document.querySelector('.button_body');
let elementBody = document.querySelector('body');

// Création d'un event au clique
elementButton.addEventListener('click', function() {
    elementBody.style.backgroundColor = 'green';
});