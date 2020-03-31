<?php

// 
$phrase = 'je mets plusieurs mots';
$nombreCaractere = strlen(($phrase));

echo 'il y a ' . $nombreCaractere . ' caracteres dans cette phrase';

?>
<br>
<?php
//str_shuffle pour melanger les caracteres
$jeMelange = 'et si on melangeait tout';
$jeMelange = str_shuffle($jeMelange);

echo $jeMelange;

?>
<br>

<?php
//ou bien rajouter date et heure

date_default_timezone_set('Europe/Paris');

$jour = date('d');
$mois = date('m');
$annee = date('Y');

$heure = date('H');
$minute = date('i');

echo  'aujourd hui, Nous sommes le ' . $jour . '/' . $mois . '/' .  $annee . ' et il est ' . $heure . ' h ' . $minute . ' m ';


?>