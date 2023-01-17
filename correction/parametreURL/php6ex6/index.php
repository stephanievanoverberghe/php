<?php
    //vérification de l'existence du paramètre "building"
    if (!empty($_GET['building']) && !empty($_GET['room'])) {
        //affichage de la valeur du paramètre building
        $building = $_GET['building'] . ' ';
        $room = $_GET['room'] . ' ';
    } else {
        //affichage d'un message d'erreur
        $error = 'Il manque au moins un paramètre : room ou building ';
    }

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
                <h1 class="text-center">PHP : Les paramètres d'url</h1>

                <div class="label w-75 p-2 pl-5 mt-4">
                    <h2><span class="badge badge-dark">Exercice 6</span></h2>
                    Faire une page index.php. Tester sur cette page que tous les paramètres de
                    cette URL existent et les afficher: index.php?building=12&room=101
                </div>
            </div>
        </div>
    </div>


    <div class="container dotted p-4 mt-4">
        <div class="row">
            <div class="col-10 offset-1">

                <p>
                    <a href="index.php?building=12&room=101">Lien avec paramètres d'URL</a>
                </p>
                <p>
                    <!-- Ceci est une coalescente : Si error n'est pas défini, alors, on affiche ce qu'il y a après les "??" -->
                    <?=$error ?? 'Building: '. $building.'<br>Chambre: ' .$room;?>
                </p>
            </div>

        </div>
    </div>

</body>

</html>