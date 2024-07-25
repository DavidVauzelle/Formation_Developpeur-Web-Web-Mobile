<!-- Page qui affiche le formulaire HTML -->
<!-- Champs : nom, email, telephone, message -->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de contact</title> 
    <?php include('formulaireDonnees.php'); ?>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="formulaire-style">
        <h1>Formulaire de contact</h1>
        <!-- <form action="formulaireConfirmation.php" method="get"> -->
        <form action="formulaireDonnees.php" method="post">
            <div>
                <label for="name">Nom* :</label>
                <input type="text" id="name" name="name" required>    
            </div>
            <br>
            <div>
                <label for="name">Prénom :</label>
                <input type="texte" id="prenom" name="prenom">    
            </div>
            <br>
            <div>
                <label for="date">Date* :</label>
                <input type="date" id="date" name="date" required>    
            </div>
            <br>
            <div>
                <label for="email">Email :</label>
                <input type="email" id="email" name="email"> 
            </div>
            <p>S'abonnemer à la newsletter :</p>
            <div>
                <input type="radio" id="newsletterChoice1" name="newsletter" value="oui" required/>
                <label for="newsletterChoice1">Oui</label>

                <input type="radio" id="newsletterChoice2" name="newsletter" value="non" required/>
                <label for="newsletterChoice2">Non</label>
            </div>
            <br>
            <div>
                <label for="produits">Produits :</label>
                <br>
                <select multiple name="produits[]" id="produits">   
                    <option value="chaussettes">Chaussettes</option>
                    <option value="pulls">Pulls</option>
                    <option value="pantalons">Pantalons</option>
                    <option value="jupes">Jupes</option>
                    <option value="echarpes">Echarpes</option>
                </select>    
            </div>
            <br>
            <div>
                <input type="submit" value="Envoyer le formulaire">
            </div>
        </form>
    </div>    
</body>
</html>