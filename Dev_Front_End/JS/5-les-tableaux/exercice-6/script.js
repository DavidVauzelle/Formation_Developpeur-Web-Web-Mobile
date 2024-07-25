// Vous disposez d'un tableau contenant une liste de mots variés. 
// Votre tâche est de classer ces mots en fonction de leur longueur. 
// Si un mot possède moins de 7 caractères, placez-le dans un tableau nommé petitsMots. 
// Si le mot possède 7 caractères ou plus, placez-le dans un autre tableau nommé grandsMots. 
// À la fin de l'exercice, affichez le nombre de petits mots et de grands mots, puis utilisez console.table() pour afficher les deux tableaux.



let mots = [
	"arbre", 
	"soleil", 
	"lumière", 
	"pomme", 
	"ordinateur", 
	"livre", 
	"bouteille", 
	"téléphone", 
	"fenêtre", 
	"chaise", 
	"table", 
	"voiture", 
	"ciel", 
	"eau", 
	"ordinateur", 
	"souris", 
	"clavier", 
	"écran", 
	"lampe", 
	"bureau"
];

let petitsMots = [];
let grandsMots = [];

// Résultat dans la console :
console.table(mots);

for (const mot of mots) {
    if (mot.length < 7) {
		petitsMots.push(mot); 
    } else {
		grandsMots.push(mot); 
    }  
} 

// Il y a X petits mots et Y grands mots.
console.log(`Il y'a ${petitsMots.length} petits mot et ${grandsMots.length} grands mots`);
console.table(petitsMots);
console.table(grandsMots);