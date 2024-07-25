/* Avec un prompt(), demandez un mot de passe à l'utilisateur. S'il correspond à votre mot de passe (que vous déclarez), affichez "OK", sinon "Accès interdit" grâce à alert().
   Exemples de résultats attendus :
   SI le mot de passe est correct : OK 
   SI le mot de passe est incorrect : Accès interdit
*/

let user_password = prompt('Quel est votre mot de passe ?');
let password = 'azerty';

if (user_password === password) {
    // SI le mot de passe est correct
    alert('OK');
} else {
    // SI le mot de passe est incorrect : Accès interdit
    alert('Accès interdit'); 
}
