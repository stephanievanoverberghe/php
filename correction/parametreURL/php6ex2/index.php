<?php
    // vérification de l'existence du paramètre age et de la présence de valeurs
    // var_dump($_GET);

    if(!empty($_GET['age'])){
        //affichage de la valeur des paramètres
        $result = 'Paramètre "age" : ' . $_GET['age'];
    } else {
        //affichage d'un message d'erreur
        $result = 'Il n\'y a pas de paramètre âge';
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
                    <h2><span class="badge badge-dark">Exercice 2</span></h2>
                    Faire une page index.php. Tester sur cette page que le paramètre age existe
                    et si c'est le cas l'afficher sinon le signaler : index.php?lastname=Nemare&firstname=Jean
                </div>
            </div>
        </div>
    </div>


    <div class="container dotted p-4 mt-4">
        <div class="row">
            <div class="col-10 offset-1">

                <p>
                    <a href="index.php?lastname=Nemare&firstname=Jean">Lien avec paramètres d'URL sans l'age</a>
                    <br>
                    <a href="index.php?age=14">Lien avec paramètres d'URL avec l'age</a>
                </p>
                <p>
                    <?=$result?>
                </p>
            </div>

        </div>
    </div>

</body>

</html>