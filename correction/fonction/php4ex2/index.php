<?php
    //déclaration de la fonction retournant une chaîne de caractères passée en paramètre
    function returnString($string){
        return $string;
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
                    <h2><span class="badge badge-dark">Exercice 2</span></h2>
                    Faire une fonction qui prend en paramètre une chaine de caractères et
qui retourne cette même chaine.
                </div>
            </div>
        </div>
    </div>


    <div class="container dotted p-4 mt-4">
        <div class="row">
            <div class="col-10 offset-1">

                <p>
                <?php
                    //affichage du retour de la fonction et on donne une valeur à son paramètre
                    // var_dump permet d'afficher le résultat et le type de données
                    var_dump(returnString(3));
                    echo '<br>';
                    var_dump(returnString('32'));
                    echo '<br>';
                    var_dump(returnString(true));
                    echo '<br>';
                    var_dump(returnString(array('1','2')));

                ?>
                </p>

            </div>

        </div>
    </div>

</body>

</html>