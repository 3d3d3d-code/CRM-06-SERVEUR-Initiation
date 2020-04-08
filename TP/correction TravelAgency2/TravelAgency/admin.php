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
            <label for="login">Pseudo</label> : <input type="text" name="login" id="login" value="" /><br />
            <label for="mdp">Message</label> : <input type="text" name="mdp" id="mdp" value="" /><br />

            <input type="submit" value="Envoyer" />
        </p>
    </form>

    <?php
    // Connexion à la base de données
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=travelagency;charset=utf8', 'root', '');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

    // Récupération de la nouvelle ligne
    $reponse = $bdd->query('SELECT id,nom,email,ajout_date,etat  FROM listing ');

    // Affichage de chaque  (toutes les données sont protégées par htmlspecialchars)
    while ($donnees = $reponse->fetch()) {
        echo '<p><strong>' . htmlspecialchars($donnees['id']) . '</strong> : ' . htmlspecialchars($donnees['nom']) . htmlspecialchars($donnees['email']) . htmlspecialchars($donnees['ajout_date']) . htmlspecialchars($donnees['etat']) . '</p>';
    }

    $reponse->closeCursor();

    ?>
</body>

</html>