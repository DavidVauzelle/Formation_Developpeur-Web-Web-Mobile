// Demandez la note d'un élève avec un prompt() et affichez sa mention.

let note = parseInt(prompt('Quel est votre note ?'));
if (note < 12) {
    // pour une note < 12
    alert('Pas de mention');
} else if (note >= 12 && note < 14) {
	// Pour 12 et +
    alert('Passable');   
} else if (note >= 14 && note < 16) {
	// Pour 12 et +
    alert('Bien');   
} else if (note >= 16 && note < 18) {
	// Pour 16 et +
    alert('Très bien');   
} else if (note >= 18 && note < 20) {
	// Pour 18 et +
    alert('Excellent');   
} else {
	// Pour 20
    alert('Extraordinaire');   
}