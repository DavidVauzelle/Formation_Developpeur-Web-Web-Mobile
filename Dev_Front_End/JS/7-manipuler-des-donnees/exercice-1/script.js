// Créez une fonction qui prend deux mots en paramètre et vérifie s'ils sont des anagrammes, 
// c'est-à-dire s'ils contiennent les mêmes lettres dans un ordre différent. 
// La fonction doit retourner un booléen : true si les mots sont des anagrammes, false sinon.

// function anagramme(mot1, mot2) {

// }

let mot1 = 'chien';
let mot2 = 'chine';
let lettresMot1 = mot1.split('');
let lettresMot2 = mot2.split('');

console.log(lettresMot1);
console.log(lettresMot2);

// tri croissant
lettresMot1.sort(); 
lettresMot1 = lettresMot1.join();

// tri croissant
lettresMot2.sort(); 
lettresMot2 = lettresMot2.join();

if (lettresMot1 === lettresMot2) {
    console.log(true)
} else {
    console.log(false)
}