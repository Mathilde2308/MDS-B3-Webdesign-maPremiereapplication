<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cat's API</title>
</head>

<body>

    <?php
    define('CAT_API_KEY', 'live_UweHpIsYQ43HFibuZSlgNSUyguIL6ZldX0K2SjpAtNYa10FRnQ8kBUhlNtLn2Cga');

    //Préparation de l'appel d'API
    $curl = curl_init();

    //Paramètrage de l'appel d'API 

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.thecatapi.com/v1/images/search?has_breeds=1',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
    ));

    //On ajoute la clef d'API obtenur sur le site Cat's API 
    //Cela permet d'avoir plus de fonctionnalités sur cette API
    $headers = [
        'x-api-key: ' . CAT_API_KEY
    ];

    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

    //On exécute l'appel d'API
    $response = curl_exec($curl);

    //On ferme le liaison avec l'API
    curl_close($curl);

    //On décode la réponse de l'API
    $responseJson = json_decode($response);
    //On extrait l'objet *cat* de la réponse d'API
    $cat = $responseJson[0];
    //On extrait l'URL de l'image du chat
    $imgUrl = $cat->url;
    //DEBUG : Afficher le contenu d'une variable
    $breed = $cat->breeds[0];
    //echo '<pre>';
    //print_r($breed);
    //echo '</pre>';

    ?>

    <h1><?php echo $breed->name ?></h1>
    <p><?php echo $breed->description ?></p>
    <p><?php echo $breed->temperament ?></p>
    <p>Origine : <?php echo $breed->origin ?></p>

    <img src="<?php echo $imgUrl ?>" alt="" width="400" />

</body>

</html>