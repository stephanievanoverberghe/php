<?php
//déclaration des variables
$number1 = 0;
$number2 = rand(0, 100);
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
                    <h2><span class="badge badge-dark">Exercice 2</span></h2>
                    Créer deux variables. Initialiser la première à 0 et la deuxième avec un nombre compris en 1 et
                    100.<br>
                    Tant que la première variable n'est pas supérieure à 20 :<br>
                    - multiplier la première variable avec la deuxième<br>
                    - afficher le résultat<br>
                    - incrementer la première variable<br>
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
                        //tant que nombre 1 est inférieur à 20
                        while ($number1 < 20)
                        {
                            //multiplication du nombre 1 et du nombre 2, affichage du résultat et incrémentation du nombre 1
                            $result = $number1 * $number2;
                            echo $result . ' ';
                            $number1++;
                        }
                        ?>
                </p>
                <p>
                Seconde technique : 
                    <?php
                    //boucle for moins de risque de faire boucle infinie car si on oublie le pas elle ne fonctionne pas
                    for($number1 = 0; $number1 < 20; $number1++){
                        echo $number1 * $number2 . ' ';
                    }
                    ?>
                </p>

            </div>

        </div>
    </div>

</body>

</html>