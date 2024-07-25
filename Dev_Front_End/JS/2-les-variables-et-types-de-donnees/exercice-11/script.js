// Pour connaitre le prix HT
let prixHT = parseInt(prompt("Quel est le prix HT ?"));

// Résultat attendu dans la console, pour un prixHT de 100€ : 
// prix HT : 100 €
console.log(`prix HT : ${prixHT} €`);

// Pour calculer le montant de la taxe
let tauxDeTaxe = (prixHT * 15) / 100;

// prix TTC : 115 €
let prixTTC = prixHT + tauxDeTaxe;
console.log(`prix TTC : ${prixTTC} €`);


