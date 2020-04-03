<?php
$bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$reponse = $bdd->query('SELECT*FROM jeux_video WHERE console="nes" or console="pc" ORDER BY prix DESC LIMIT 4 ');
while ($donnees = $reponse->fetch()) {

    echo '<p>' . $donnees['nom'] . ' sur console ' . $donnees['console'] . 'au prix de' . $donnees['prix'] . 'euros' . '</p>';
}
?>

<!-- FAIRE UNE REQUETE PREPAREE-->array
<?php
$bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$requete = $bdd->prepare('SELECT*FROM jeux_video WHERE console=?');
$requete->execute(array('nes'));
while ($donnees = $requete->fetch()) {

    echo '<p>' . $donnees['nom'] . ' sur console ' . $donnees['console'] . 'au prix de' . $donnees['prix'] . 'euros' . '</p>';
}

?>

<!-- faire une requete en GET ET UTILISER isset pour verifier si la requete existe-->


<?php
if (isset($_GET['nom'])) {
    $bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    $requete = $bdd->prepare('SELECT*FROM jeux_video WHERE nom=? ');
    $requete->execute(array($_GET['nom']));
    while ($donnees = $requete->fetch()) {

        echo '<p>' . $donnees['nom'] . ' sur console ' . $donnees['console'] . 'au prix de' . $donnees['prix'] . 'euros' . '</p>';
    }
}


?>
<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

// On ajoute une entrée dans la table jeux_video 
$bdd->exec('INSERT INTO jeux_video(nom, possesseur, console, prix, nbre_joueurs_max, commentaires) VALUES(\'Battlefield 1942\', \'Patrick\', \'PC\', 45, 50, \'2nde guerre mondiale\')');

echo 'Le jeu a bien été ajouté !';
?>

<!--  faire un update-->


