<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>NASA ACCES</title>
        <link href="styles.css" rel="stylesheet">
    </head>
    <body>
    
        <?php
    if (isset($_POST['password']) && ($_POST['password']) ==  "kangourou") // et si le mot de passe est bon
    {
    // On affiche les codes
    ?>
        <h1>Voici les codes d'accès :</h1>
        <p><strong>CRD5-GTFT-CK65-JOPM-V29N-24G1-HH28-LLFV</strong></p>   
        
        <p>
        Cette page est réservée au personnel de la NASA. N'oubliez pas visiter régulièrement le site car les codes d'accès sont changés toutes les semaines.<br />
        La NASA vous remercie de votre visite.
        </p>
        <?php
    }
    else // Sinon, on affiche un message d'erreur
    {
        echo '<p>password wrong</p>';
    }
    ?>
    
        
    </body>
    <script>      </script>
</html>