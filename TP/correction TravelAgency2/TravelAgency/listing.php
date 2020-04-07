
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=listing, initial-scale=1.0">
    <title>listing</title>
</head>
<body>


<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=travelagency;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

$bdd->exec('SELECT *FROM travelagency');

// Ajout d'une entree dans la table jeux_video:
$bdd->exec('INSERT INTO listcontact(nom, email, datetime, etat)VALUES(\'john\', \'john@gmail.com\', \'now()\',\'o\')');

echo 'ligne ok !';

?>
    
</body>
</html>










 


