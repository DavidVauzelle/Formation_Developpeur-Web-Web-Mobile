<!DOCTYPE html>
<?php

    if (isset($_POST['couleurs'])) {
	    $color = $_POST['couleurs'];
        setcookie("couleur", $color, time() + 3600, "/");
    }
    else {
        if(isset($_COOKIE["couleur"])) {
            $color = $_COOKIE["couleur"];
        }
        else {
            $color = '#FFFFFF';
        }
    }
?>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body style="background-color: <?php echo $color; ?>">
        <p><strong>Préférences Utilisateurs</strong></p>

        <form action="" method="post">
            <label for="couleur">Choisir une couleur:</label>

            <select name="couleurs" id="choix-couleur">
              <option value="">--Choisir une couleur--</option>d
              <option value='#0000FF'>Bleu</option>
              <option value='#FF0000'>Rouge</option>
              <option value='#FFFF00'>Jaune</option>
              <option value='#00FF00'>Vert</option>
              <option value='#FFC0CBF'>Rose</option>
              <option value='#582900'>Marron</option>d
            </select>

            <div>
                <button type="submit">Select</button>
            </div>
        </form>
    </body>
</html>
