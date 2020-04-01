<!DOCTYPE html>
<html>

<head>
   <meta charset="UTF-8">
   <title>Mon site</title>

</head>

<body>
   <p>
      <?php

      if (isset($_GET['nom']) and isset($_GET['prenom']) and isset($_GET['repeter'])) {
         $nbRepetition = (int) $_GET['repeter'];

         if ($nbRepetition < 100) {
            for ($repetition = 0; $repetition <= $nbRepetition; $repetition++) {
               echo  ' bonjour ' . $_GET['nom'] . ' ' . $_GET['prenom'];
            }
         }
      } else {
         echo 'pas de nom ni de prenom defini';
      }
      ?>
   </p>
</body>

</html>