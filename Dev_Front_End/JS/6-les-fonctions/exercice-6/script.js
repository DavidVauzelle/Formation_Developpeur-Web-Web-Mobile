// Créez quatre fonctions distinctes pour l'addition, la soustraction, la multiplication et la division. 
// Chaque fonction doit vérifier si les arguments a et b sont bien définis 
// et sont des nombres; si ce n'est pas le cas, retournez "paramètres incorrects". 
// Sinon, effectuez l'opération correspondante et retournez le résultat.

function addition(a,b) {
    if (typeof a === 'number' && typeof b === 'number') {
        return a + b;
    } else {
        console.log("paramètres incorrects");
    }
}

function soustraction(a,b) {
    if (typeof a === 'number' && typeof b === 'number') {
        return a - b;
    } else {
        console.log("paramètres incorrects");
    }
}


function multiplication(a,b) {
    if (typeof a === 'number' && typeof b === 'number') {
        return a * b;
    } else {
        console.log("paramètres incorrects");
    }
}

function division(a,b) {
    if (typeof a === 'number' && typeof b === 'number') {
        return a / b;
    } else {
        console.log("paramètres incorrects");
    }
}

console.log(addition(2,2));
console.log(soustraction(2,2));
console.log(multiplication(2,2));
console.log(division(2,2));