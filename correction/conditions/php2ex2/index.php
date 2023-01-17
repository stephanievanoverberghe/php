
<?php

$isEasy = true;
if($isEasy == true){
    $msg = 'C\'est facile !!';
}else{
    $msg = 'C\'est difficile !!!';
}

$msg2 = ($isEasy == true) ? 'C\'est facile !!' : 'C\'est difficile !!!'; //paranthèses facultatives
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
                <h1 class="text-center">PHP : Les conditions</h1>

                <div class="label w-75 p-2 pl-5 mt-4">
                    <h2><span class="badge badge-dark">Exercice 2</span></h2>
                    Créer une variable isEasy de type booléan et l'initialiser avec une valeur.<br>
Afficher C'est facile!! si c'est vrai. Dans le cas contraire afficher C'est difficile !!!.<br>
Bonus : L'écrire de deux manières différentes.
                </div>
            </div>
        </div>
    </div>


    <div class="container dotted p-4 mt-4">
        <div class="row">
            <div class="col-10 offset-1">

                <p>
                    <?=$msg?><br>
                    <?=$msg2?>
                </p>

            </div>


        </div>
    </div>

</body>

</html>