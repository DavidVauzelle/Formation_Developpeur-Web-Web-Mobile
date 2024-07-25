// Dans la <div> avec la classe container, en javascript, 
// ajoutez un paragraphe contenant du lorem ispum

// Création du paragraphe
let elementP = document.createElement('p');

// Création de la classe container
elementP.classList.add('container');

// Ajout de texte dans le paragraphe
elementP.innerText = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem magni ad impedit qui quaerat vero blanditiis. Sit repellendus atque odio qui veritatis! Unde enim, consequatur nulla voluptas fuga esse officiis?";

// ajout de container au DOM
let container = document.querySelector('.container');
container.appendChild(elementP);

