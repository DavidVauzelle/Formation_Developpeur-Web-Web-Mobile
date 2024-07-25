<!-- Page qui affiche le formulaire HTML -->
<!-- Champs : nom, email, telephone, message -->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>projetFormulaire</title>
</head>
<body>
    <h1>Formulaire de contact</h1>
    <!-- <form action="furmulaireConfirmation.php" method="get"> -->
    <form action="furmulaireConfirmation.php" method="post">
        <div>
            <label for="name">Nom* :</label>
            <input type="text" id="name" name="name" required>    
        </div>
        <br>
        <div>
            <label for="email">Email* :</label>
            <input type="email" id="email" name="email" required> 
        </div>
        <br>
        <div>
            <label for="tel">Téléphone :</label>
            <input type="tel" id="tel" name="tel">   
        </div>
        <br>
        <div>
            <label for="message">Commentaire :</label><br>
            <textarea 
                id="message" 
                name="message"
                placeholder="votre message ici">
            </textarea>
        </div>
        <br>
        <div>
            <label for="objet">Objet</label>
            <select name="objet" id="objet">
                <option value="reclamation">Réclamation</option>
                <option value="question">Question</option>
                <option value="demande">Demande</option>
            </select>
        </div>
        <br>
        <div>
            <label for="contact">Contact</label>
            <select name="contact" id="contact" multiple>
                <option value="telephone">Téléphone</option>
                <option value="mail">Mail</option>
                <option value="courrier">Courrier</option>
            </select>
        </div>
        <br>
        <div>
            <input type="hidden" id="secret" name="secret"> 
        </div>
        <br>
        <div>
            <label for="majeur">Majeur :</label>
            <input type="checkbox" id="majeur" name="majeur"> 
        </div>
        <br>
        <div>
            <fieldset>
                <legend>Loisirs</legend>
                <input type="radio" id="loisirs1" name="loisirs">
                <label for="loisirs1">Sport</label>

                <input type="radio" id="loisirs2" name="loisirs">
                <label for="loisirs2">Lecture</label>

                <input type="radio" id="loisirs3" name="loisirs">
                <label for="loisirs3">Musique</label>
            </fieldset>    
        </div>
        <br>
        <div>
            <input type="submit" value="Envoyer le message">
        </div>
    </form>
</body>
</html>