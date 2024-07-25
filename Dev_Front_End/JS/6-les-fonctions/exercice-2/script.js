// Écrivez une fonction qui prend en paramètre un prénom. La fonction doit retourner “Un pour <prenom>, un pour moi”. 
// Si aucun prénom n'est donné, la fonction doit retourner “Un pour toi, un pour moi”.

function prenom(prenom = "toi") {
    console.log("Un pour " + prenom + ", un pour moi");
  }
  
prenom("David");
prenom();
