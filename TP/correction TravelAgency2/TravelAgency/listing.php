<?php
// Connexion à la base de données
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=travelagency;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}



if (isset($_GET['prenom']) and isset($_GET['nom']) ) 
{
    $nbRepetition = (int) $_GET['repeter'];

    if ($nbRepetition < 3) {
       for ($repetition = 0; $repetition <= $nbRepetition; $repetition++) {
          echo  ' bonjour '  . $_GET['prenom'].$_GET['nom'];
       }
    }
 } else{
    echo 'remplissez les champs svp !';
 
}
// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO listing (prenom, nom,email) VALUES(?,?,?)');
$req->execute(array($_POST['prenom'], $_POST['nom'] , $_GET['email']));

// Redirection du visiteur vers la page du minichat
header('Location:http://localhost/CRM-06-SERVEUR-Initiation/TP/correction%20TravelAgency2/TravelAgency/contact.php');
?>