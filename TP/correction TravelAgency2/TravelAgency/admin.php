<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>minichat</title>
</head>
<style>
    form {
        text-align: center;
    }
</style>

<body>

    <form action="listing.php" method="post">
        <p>
            <label for="login">login</label> : <input type="text" name="login" id="login" value="" /><br />
            <label for="mdp">mot de passe</label> : <input type="text" name="mdp" id="mdp" value="" /><br />

            <input type="submit" value="Envoyer" />
        </p>
    </form>

    <?php
    

    // Récupération de la nouvelle ligne
   

    // Affichage de chaque  (toutes les données sont protégées par htmlspecialchars)
    while ($donnees = $reponse->fetch()) {
        echo '<p><strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['nom']) . htmlspecialchars($donnees['email']) . htmlspecialchars($donnees['ajout_date']) . htmlspecialchars($donnees['etat']) . '</p>';
    }

    $reponse->closeCursor();

    ?>
</body>

</html>