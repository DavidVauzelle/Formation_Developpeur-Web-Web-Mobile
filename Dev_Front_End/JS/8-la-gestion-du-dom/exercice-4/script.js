// Créez une fonction createTag(tagName, content), qui prend en paramètre un nom de balise, et un contenu. 
// Cette fonction retourne un élément html.
// Testez votre fonction pour créer des éléments et les ajouter au DOM.

// retourne une div qui contient le texte 'bonjour le monde'
// const elementHTML = createTag('div', 'bonjour le monde');

function createTag(tagName, content) {
    // Création d'un nouvel élément HTML
    const nouvelElement = document.createElement(tagName);

    // Ajouter du contenu dans le nouvel élément HTML
    nouvelElement.innerText = content;

    // Retour de la fonction
    return nouvelElement;
}

// Appel de la fonction pour tester l'ajout d'un élément et de son contenu
    const paragraphe = createTag('div', 'bonjour le monde');
    console.log(paragraphe);


// Ajout dans élément au DOM
    document.body.appendChild(paragraphe);