<?php

    // Déclaration des variables demandées
    $string = 'Bonjour';
    $int = 42;
    $float = 5.16;
    $boolean = true;

    /*
    Il est aussi possible de forcer le typage avec la fonction php settype
    settype($string, 'string');
    settype($int, 'integer');
    settype($float, 'float');
    settype($boolean, 'boolean');
    */
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>La Manu - L'école des métiers du numérique</title>
</head>

<body>

    <div class="container-fluid bg-manu p-0">
        <div class="alert-transparent" role="alert">
            <div class="container h-100 d-flex flex-column justify-content-center align-items-center ">
                <h1 class="text-center">PHP : Les variables</h1>

                <div class="label w-75 p-2 pl-5 mt-4">
                    <h2><span class="badge badge-dark">Exercice 4</span></h2>
                    Créer une variable de type string, une variable de type int, une variable de type float, une
                    variable de type booléan et
                    les initialiser avec une valeur de votre choix. Les afficher
                </div>
            </div>
        </div>
    </div>


    <div class="container dotted p-4 mt-4">
        <div class="row">
            <div class="col-10 offset-1">

                <?=$string . ', ' . $int . ', ' . $float . ', ' . $boolean . '.';?>

            </div>


        </div>
    </div>

</body>

</html>