<?php
//déclaration de la variable
$number = 1;
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
                <h1 class="text-center">PHP : Les boucles</h1>

                <div class="label w-75 p-2 pl-5 mt-4">
                    <h2><span class="badge badge-dark">Exercice 7</span></h2>
                    En allant de 1 à 100 avec un pas de 15, afficher le message On tient le bon bout
                </div>
            </div>
        </div>
    </div>


    <div class="container dotted p-4 mt-4">
        <div class="row">
            <div class="col-10 offset-1">

                <p>
                    <strong>Première technique :</strong>
                    <br>
                    <?php
                        //tant que variable inférieure ou égale à 100
                        while ($number <= 100){
                            //affichage du message et incrémentation avec pas de 15
                            echo 'On tient le bon bout.<br>';
                            $number += 15;
                        }
                    ?>
                </p>
                <p>
                    <strong>Seconde technique :</strong>
                    <br>
                    <?php
                        for($number = 1; $number <= 100; $number += 15){
                            echo 'On tient le bon bout.<br>';
                        }
                    ?>
                </p>

            </div>

        </div>
    </div>

</body>

</html>