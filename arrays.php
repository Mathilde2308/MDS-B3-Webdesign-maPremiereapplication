<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>

<body>
    <?php
    //Je déclare un tableau
    $montableau = array('voiture', 5, 'coucou', 95, 'document');
    echo '<pre>'; //balise <pre qui veut dire préformater pour avoir un visuel de tableau
    print_r($montableau);
    echo '</pre>';

    echo $montableau[2];

    foreach ($montableau as $valeur) {
        echo $valeur . '<br />';
    }

    $montableauAssociatif = array(
        'clef' => 'valeur',
        'nom' => 'Smith',
        'prenom' => 'John',
        'âge' => '28',
    );

    echo '<pre>';
    print_r($montableauAssociatif);
    echo '</pre>';

    echo $montableauAssociatif['nom'];

    echo '<br/>';

    $tailledemontableau = sizeof($montableauAssociatif);
    echo $tailledemontableau;

    for ($i = 0; $i < $tailledemontableau; $i++) {
        echo '<br/>';
        echo $i;
    }

    ?>
</body>

</html>