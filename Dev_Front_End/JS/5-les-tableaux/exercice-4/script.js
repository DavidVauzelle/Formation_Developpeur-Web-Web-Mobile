// À l'aide d'une boucle for, réalisez les tâches suivantes :
// 1. Remplissez un tableau vide avec les 10 premiers nombres, puis affichez "Les dix premiers nombres sont : 1, 2, 3, 4, 5, 6, 7, 8, 9, 10".

// Les dix premiers nombres sont : 1, 2, 3, 4, 5, 6, 7, 8, 9, 10
let chiffres = [];

for (let index = 1; index <=10 ; index++) {
    chiffres.push(index);
}
console.table(chiffres);
console.log(`Les dix premiers nombres sont : ${chiffres}`); 




// 2. Remplissez un deuxième tableau vide avec les 10 premiers nombres pairs, puis affichez "Les dix premiers nombres pairs sont : 2, 4, 6, 8, 10, 12, 14, 16, 18, 20".
// Les dix premiers nombres pairs sont : 2, 4, 6, 8, 10, 12, 14, 16, 18, 20

let chiffresPaires = [];

for (let index = 2; index <=20 ; index+= 2) {
    chiffresPaires.push(index);
}
console.table(chiffresPaires);
console.log(`Les dix premiers nombres paires sont : ${chiffresPaires}`); 

