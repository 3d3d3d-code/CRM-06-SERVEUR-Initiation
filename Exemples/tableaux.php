<?php
$prenom = 'reda';
echo 'Bonjour ' . $prenom; // Cela affichera : Bonjour reda
?>

<?php
//va parcourir les capitales
$pays = array("France", "Allemagne", "Autriche");
$capitale = array("Paris", "Berlin", "Vienne");

for ($numero = 0; $numero < 3; $numero++) {
  echo '<p>' . $capitale[$numero] . ' </p>';
}


?>

<p>ou bien</p>
<?php
//
$pays = array("France", "Allemagne", "Autriche");
$capitale = array("Paris", "Berlin", "Vienne");

foreach ($pays as $pays) {
  echo '<p>' . $pays . ' </p>';
}

?>
// foreach
<?php
$prenoms = array('François', 'Michel', 'Nicole', 'Véronique', 'Benoît');

foreach ($prenoms as $element)
//pour afficher chaque element
{
  echo $element . '<br />';
}
?>
<p> autre exemple</p>

<?php

//$cle, qui contiendra la clé de l'élément en cours d'analyse (« prenom », « nom », etc.) ;

//$element, qui contiendra la valeur de l'élément en cours (« reda », « Dupont », etc.).


$coordonnees = array(
  'prenom' => 'reda',
  'nom' => 'hamza',
  'adresse' => '3 Rue du Paradis',
  'ville' => 'Marseille',
  'pays' => 'France'
);

foreach ($coordonnees as $cle => $element) {
  echo '[' . $cle . '] vaut ' . $element . '<br />';
}
?>

<?php
//array_key_exists : pour vérifier si une clé existe dans l'array ;

//in_array : pour vérifier si une valeur existe dans l'array ;

//array_search : pour récupérer la clé d'une valeur dans l'array.

$coordonnees = array(

  'nom' =>  'terre',
  'taille' => 1234,
  'couleur' => 'bleue'
);

if(array_key_exists('couleur',$coordonnees)){



  echo'la cle "couleur" se trouve bien la';
}
if(array_search('taille',$coordonnees)){

  echo'la taille est de' ."taille";
}





?>