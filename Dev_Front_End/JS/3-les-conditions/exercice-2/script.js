/* Demandez deux nombres à l'utilisateur avec prompt() et affichez lequel est le plus grand, le plus petit, ou s'ils sont égaux.
   Exemples de résultats attendus dans la console :
        Le nombre 1 est plus grand que le nombre 2
        Le nombre 1 est plus petit que le nombre 2
        Les deux nombres sont égaux
*/

let number1 = parseInt(prompt('Nombre 1 ?'));
let number2 = parseInt(prompt('Nombre 2 ?'));

if (number1 > number2) {
    // Le nombre 1 est plus grand que le nombre 2
    console.log('Le nombre 1 est plus grand que le nombre 2');
} else if (number1 < number2) {
    // Le nombre 1 est plus petit que le nombre 2
    console.log('Le nombre 1 est plus petit que le nombre 2');
}   else {
    console.log('Les deux nombres sont égaux'); 
}

