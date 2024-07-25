// Création de H1
let elementH1 = document.createElement('h1');

// Modification de la taille de h1
elementH1.style.fontSize = '50px';

// Modification de la couleur de h1
elementH1.style.color = 'blue';

// Ajout de texte dans h1
elementH1.innerText = `Le gras, c'est la VIE !!!'`;

// Ajout de h1 dans le header
let elementHeader = document.querySelector('header');
elementHeader.appendChild(elementH1);

// Supprimer votre element footer
let elementFooter = document.querySelector('footer');
elementFooter.remove();

console.log(elementHeader);