/* Demandez un mot de passe à l'utilisateur avec un prompt(). 
   Affichez "Mot de passe valide" SI le mot de passe a entre 5 et 12 caractères. 
   SINON, affichez "Mot de passe invalide".
*/

let user_password = prompt('Quel est votre mot de passe ?');
if (user_password.length >= 5 && user_password.length <= 12) {
    // SI le mot de passe a entre 5 et 12 caractères.
    alert('Mot de passe valide');
} else {
    // SINON, affichez "Mot de passe invalide".
    alert('Mot de passe invalide'); 
}