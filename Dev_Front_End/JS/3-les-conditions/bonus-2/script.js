/*
Demandez à l'utilisateur d'entrer une année et affichez si c'est une année bissextile ou non. 
Rappel : une année est bissextile si elle est divisible par 4 MAIS pas par 100, sauf si elle est également divisible par 400.
*/

let annee = parseInt(prompt('Année ?'));

// Si l’année est divisible par 4,
/*if (annee / 4 ) {
    // Si l’année est divisible par 4,
    alert(`L'année ${annee} est bissextile.`);
    } else if (annee / 100 ) {
        // Si l’année est divisible par 100,
        alert(`L'année ${annee} est bissextile.`);
    } else if (annee / 400 ) {
        // SAUF si elle est également divisible par 400.    
        alert(`L'année ${annee} est bissextile.`);
    } else {
        alert(`L'année ${annee} n'est pas bissextile.`);
}*/

if ((annee % 4 === 0 && annee % 100 !== 0) || (annee % 400 === 0)) {
    alert(`L'année ${annee} est bissextile.`);
} else {
    alert(`L'année ${annee} n'est pas bissextile.`);
}

