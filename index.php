<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php

  $name = 'Lalart'; //chaine de caractères
  $prenom = 'Mathilde'; //Chaîne de caractères
  $age = 27; //Nombre entier
  $adresse = '1 allée du théâtre, 44800, NANTES'; //Chaine de caractères
  $estEtudiant = true; //booléen

  echo 'Nom : ' . $name . "\r\n";
  echo 'Prénom : ' . $prenom . "\r\n";
  echo 'Âge : ' . $age . "\r\n";
  echo 'Adresse : ' . $adresse . "\r\n";
  echo 'Est-il étudiant ? : ' . $estEtudiant . "\r\n";

  echo '<br/>';

  echo '--- Opérations mathématiques --- <br/>';

  $a = 5;
  $b = 10;
  $c = 15;

  $resultat = $a - $b;
  echo $resultat;

  ?>

</body>

</html>