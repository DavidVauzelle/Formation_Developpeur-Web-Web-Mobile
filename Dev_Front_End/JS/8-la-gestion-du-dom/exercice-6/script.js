// À partir d'un tableau d'images, créez une liste d'images sur votre page. 
// Assurez-vous que chaque image ait une taille de 300px par 300px sans être déformée. 
// Utilisez Flexbox pour organiser les images de manière esthétique sur la page.

// tableau d'image à utiliser

const images = [
    "https://images.unsplash.com/photo-1545569341-9eb8b30979d9?q=80&w=3540&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
    "https://images.unsplash.com/photo-1524413840807-0c3cb6fa808d?q=80&w=3540&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
    "https://images.unsplash.com/photo-1528164344705-47542687000d?q=80&w=3584&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
    "https://plus.unsplash.com/premium_photo-1661371927364-e3aec9079c66?q=80&w=3540&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
    "https://images.unsplash.com/photo-1490806843957-31f4c9a91c65?q=80&w=3540&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
    "https://images.unsplash.com/photo-1492571350019-22de08371fd3?q=80&w=3453&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
    "https://images.unsplash.com/photo-1480796927426-f609979314bd?q=80&w=2300&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
]

for (const image of images) {
    // Créer un élément HTML img
    let elementImg = document.createElement('img');

    // Changement de la source de l'image
    elementImg.src = image;

    // Styliser les images 
    // elementImg.classList.add('.img');
    document.body.style.height = '100vh';
    elementImg.style.height = '300px';
    elementImg.style.width = '300px';
    elementImg.style.objectFit = 'cover';
    document.body.style.display = 'flex';
    document.body.style.flexWrap = 'wrap';
    document.body.style.justifyContent = 'center';
    document.body.style.alignItems = 'center';
    document.body.style.gap = '25px';

    
    // Ajouter votre image au DOM
    document.querySelector('img');
    document.body.appendChild(elementImg);
    console.log(image); 
}