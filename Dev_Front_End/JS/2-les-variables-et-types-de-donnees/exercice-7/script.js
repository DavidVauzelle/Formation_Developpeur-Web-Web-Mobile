let nombre1 = prompt('Nombre 1 ?');
let nombre2 = prompt('Nombre 2 ?');
nombre1 = parseInt(nombre1);
nombre2 = parseInt(nombre2);

// Résultat attendu pour 10 et 2, dans la console :

let produit = nombre1 * nombre2;
console.log(`${nombre1} * ${nombre2} = ${produit}`);

let difference = nombre1 - nombre2;
console.log(`${nombre1} - ${nombre2} = ${difference}`);

let somme = nombre1 + nombre2;
console.log(`${nombre1} + ${nombre2} = ${somme}`);

let quotient = nombre1 / nombre2;
console.log(`${nombre1} / ${nombre2} = ${quotient}`);

let puissance = nombre1 ** nombre2;
console.log(`${nombre1} exposant ${nombre2} = ${puissance}`);