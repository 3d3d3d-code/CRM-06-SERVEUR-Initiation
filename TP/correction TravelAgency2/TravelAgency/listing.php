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



if (isset($_POST['login']) and isset($_POST['mdp']) ) 
{
    // Insertion du message à l'aide d'une requête préparée

   $req = $bdd->prepare('SELECT  login,mdp FROM admin(?,?)');
   $req->execute(array($_POST['login'], $_POST['mdp'] ));
  
    
 } else{
    echo 'remplissez les champs svp !';
  
}


$reponse = $bdd->query('SELECT nom,email,ajout_date,etat  FROM listing ');
//bouton de retour

?>