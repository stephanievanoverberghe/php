<?php
    // déclaration de la fonction retournant la somme de 3 nombres
    // On peut déclarer une valeur par défaut pour chacun des paramètres avec le signe '=' 
    function sum($number1 = 15, $number2 = 85, $number3 = 6){
        return $number1 + $number2 + $number3;
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
                <h1 class="text-center">PHP : Les fonctions</h1>

                <div class="label w-75 p-2 pl-5 mt-4">
                    <h2><span class="badge badge-dark">Exercice 8</span></h2>
                    Faire une fonction qui prend en paramètre trois nombres et qui renvoit la somme de
                    ces nombres.<br>
                    Tous les paramètres doivent avoir une valeur par défaut
                </div>
            </div>
        </div>
    </div>


    <div class="container dotted p-4 mt-4">
        <div class="row">
            <div class="col-10 offset-1">

                <p>
                    La somme de 3 chiffres est égale à : <?= sum(5, 8, 2); ?>
                </p>

            </div>

        </div>
    </div>

</body>

</html>