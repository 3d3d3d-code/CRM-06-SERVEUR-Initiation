<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Page protégée par mot de passe</title>
        <link href="styles.css" rel="stylesheet">
    </head>
    <body background="">
>
        <p>Veuillez entrer le mot de passe pour obtenir les codes d'accès au serveur central de la NASA :</p>
        <form action="secret.php" method="POST">
            <p>
            <input type="password" name="password" />
            <input type="submit" value="Valider" />
            </p>
        </form>
        <p>Cette page est réservée au personnel de la NASA. Si vous ne travaillez pas à la NASA, inutile d'insister vous ne trouverez jamais le mot de passe ! ;-)</p>
    </body>
</html>