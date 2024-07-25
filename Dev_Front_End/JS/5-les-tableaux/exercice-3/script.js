// Créez un tableau contenant tous les jours de la semaine sous forme de chaînes de caractères. 
// let tableauJoursSemaine = [];

let joursSemaine = ["lundi", "mardi", "mercredi", "jeux", "vendredi", "samedi", "dimanche"];

// 1. Affichez ensuite le tableau dans la console, grâce à console.table().
console.table(joursSemaine);

// 2. à l’aide d’une boucle for, bouclez sur le tableau pour afficher chaque jour de la semaine 
// dans la console en utilisant le format : "Le jour X de la semaine est JOUR".

// Résultat dans la console :

// Le jour 1 de la semaine est Lundi
// Le jour 2 de la semaine est Mardi
// DÉFI : Lorsque vous arrivez à "Dimanche" dans votre boucle, 
// affichez : "Le jour 7 de la semaine est Dimanche, et le Dimanche c'est Gratuit !"

for (let i = 0; i < joursSemaine.length; i++) {
  if (i < joursSemaine.length-1) {
    console.log(`Le jour ${i+1} de la semaine est ${joursSemaine[i]}`);  
  } else {
    console.log(`Le jour ${joursSemaine.length} de la semaine est ${joursSemaine[i]}, et le dimanche c'est GRATUIT !`);
  }
}

