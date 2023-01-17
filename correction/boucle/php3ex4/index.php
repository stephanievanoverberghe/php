<?php
//délaration de la variable
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
                    <h2><span class="badge badge-dark">Exercice 4</span></h2>
                    Créer une variable et l'initialiser à 1.<br>
                    Tant que cette variable n'atteint pas 10, il faut :<br>
                    - l'afficher<br>
                    - l'incrementer de la moitié de sa valeur
                </div>
            </div>
        </div>
    </div>


    <div class="container dotted p-4 mt-4">
        <div class="row">
            <div class="col-10 offset-1">

                <p>
                    Première technique :
                    <?php
                        //tant que variable inférieure ou égale à 10
                        while ($number <= 10){
                            //affichage de la valeur et incrémentation de la moitié de la valeur de la variable
                            echo $number . ' - ';
                            $number += $number / 2;
                        }
                    ?>
                </p>
                <p>
                    Seconde technique :
                    <?php
                        for($number = 1; $number <= 10; $number += $number / 2){
                            echo $number . ' - ';
                        }
                    ?>
                </p>

            </div>

        </div>
    </div>

</body>

</html>