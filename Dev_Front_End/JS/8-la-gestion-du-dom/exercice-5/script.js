// Affichez une image sur votre page. 
// Ajoutez un évènement pour qu’au survol de cette image, elle devienne floue. 
// (faite le bien en javascript, pas avec un :hover)

// Sélection de l'image 
let elementImg = document.querySelector('img');
elementImg.style.height = '800px';
elementImg.style.width = '800px';

// Ajout d'un évènement au survol (action : rendre l'image flou)
elementImg.addEventListener('mouseover', function() {
    elementImg.style.filter = 'blur(5px)';
    // console.log(elementImg);
});   

// Ajout d'un évènement pour enlever le flou
elementImg.addEventListener('mouseout', function() {
    elementImg.style.filter = 'none';
});