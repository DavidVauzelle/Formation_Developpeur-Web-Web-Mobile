// Utilisez switch pour afficher le nom du jour correspondant à un numéro saisi par l'utilisateur via prompt().

let number = parseInt(prompt('Nombre ?'));

switch (number) {
    case 1:
        alert("Lundi");
        break;
    case 2:
        alert("Mardi");
        break;
    case 3:
        alert("Mercredi");
        break;
    case 4:
        alert("Jeudi");
        break;
    case 5:
        alert("Vendredi");
        break;
    case 6:
        alert("Samedi");
        break;
    case 7:
        alert("Dimanche");
        break;
    default:
        alert("Nombre non reconnu");
}