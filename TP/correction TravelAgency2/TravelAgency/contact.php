<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>
<body>
    <h1>Demande de contact</h1>
    Demande de contact prise en compte pour <?php echo $_POST["name"];?><br>
    Vous serez contacte a l'adresse communiquee:<?php echo $_POST["email"];?><br><br>
    <a href="./index.php?iscontact=o">page d'acceuil</a>


   <?php
// on sépare les destinataires par une virgule
//$Destinataires = "kcharih@arfp.asso.fr,zinedine.zidane@fff.fr,pierre.dupont@gmail.com ";
 
//mail($Destinataires, "bienvenue", "bonjour blabla\etc");
?>
</body>
</html>