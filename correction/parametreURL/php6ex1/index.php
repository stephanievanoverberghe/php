<?php
    //vérification de l'existence des paramètres de l'url et s'ils contiennent une valeur
    //isset vérifie uniquement l'existence du paramètre
    //!empty vérifie l'existence du paramètre et qu'il n'est pas vide

    //$_GET = variable superglobale (C'est un tableau associatif)

    if(!empty($_GET['lastname']) && !empty($_GET['firstname'])){
        //affichage de la valeur des paramètres 
        $result = 'Les paramètres d\'url sont : ' . $_GET['lastname'] . ' ' . $_GET['firstname'];
    } else {
        //génération d'un message d'erreur
        $result = 'Veuillez vérifier les paramètres d\'URL';
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
                    <h2><span class="badge badge-dark">Exercice 1</span></h2>
                    Faire une page index.php. Tester sur cette page que tous les paramètres<br>
                    de cette URL existent et les afficher: index.php?lastname=Nemare&firstname=Jean
                </div>
            </div>
        </div>
    </div>


    <div class="container dotted p-4 mt-4">
        <div class="row">
            <div class="col-10 offset-1">

                <p>
                    <a href="index.php?lastname=Nemare&firstname=Jean">Lien avec paramètres d'URL</a>
                </p>
                <p>
                    <?=$result?>
                </p>
            </div>

        </div>
    </div>

</body>

</html>