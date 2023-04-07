<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONDITIONS</title>
</head>

<body>
    <?php
    // Je définis ma vitesse maximale 
    define('VITESSE_MAX', 50);
    //je définis ma vitesse 
    $vitesse = 50;

    if ($vitesse >= VITESSE_MAX) {
        echo 'Vous roulez trop vite !';
    } else {
        echo 'Vous roulez tranquillement';
    }

    echo '<br /> Enchaînement de conditions <br />';

    $classePerso = 'nain';
    if ($classePerso === 'elfe') {
        echo 'Vous êtes un elfe !';
        echo '<br/>';
        echo 'J\'ai de grandes oreilles !';
    } elseif ($classePerso === 'humain') {
        echo 'Vous êtes un humain !';
        echo '<br/>';
        echo 'J\'ai le pied léger !';
    } elseif ($classePerso === 'nain') {
        echo 'Vous êtes un nain !';
        echo '<br/>';
        echo 'J\'aime la bière !';
    } else {
        echo 'Vous n\'existez pas !';
    }

    //Même chose  que if else mais en mieux 

    switch ($classePerso) {
        case 'elfe':
            echo 'Vous êtes un elfe !';
            echo '<br/>';
            echo 'J\'ai de grandes oreilles !';
            break;
        case 'humain':
            echo 'Vous êtes un humain !';
            echo '<br/>';
            echo 'J\'ai le pied léger !';
            break;
        case 'nain':
            echo 'Vous êtes un nain !';
            echo '<br/>';
            echo 'J\'aime la bière !';
            break;
        default:
            echo 'Vous n\'existez pas !';
    }



    ?>

</body>

</html>