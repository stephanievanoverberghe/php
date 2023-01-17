<?php
//déclaration des variables
$age = 20;
$gender = 'Homme';

//vérification âge valide
if($age > 0) {
    //vérification des conditions
    if($gender == 'Femme' && $age < 18) {
        $msg = 'Vous êtes une femme et vous êtes mineure.';
    } elseif ($gender == 'Femme' && $age >= 18) {
        $msg = 'Vous êtes une femme et vous êtes majeure.';
    } elseif ($gender == 'Homme' && $age < 18) {
        $msg = 'Vous êtes un homme et vous êtes mineur.';
    } elseif ($gender == 'Homme' && $age >= 18) {
        $msg = 'Vous êtes un homme et vous êtes majeur.';
    } else {
        //affichage d'un msg d'erreur
        $msg = 'Vous n\'êtes pas humain !';
    }
} else {
    //affichage d'un msg d'erreur
    $msg = 'L\'âge n\'est pas valide';
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
                <h1 class="text-center">PHP : Les conditions</h1>

                <div class="label w-75 p-2 pl-5 mt-4">
                    <h2><span class="badge badge-dark">Exercice 3</span></h2>
                    Créer deux variables age et gender. La variable gender peut prendre comme valeur 'Homme' ou
                    'Femme'<br>
                    En fonction de l'âge et du genre afficher la phrase correspondante :<br>
                    Vous êtes un homme et vous êtes majeur<br>
                    Vous êtes un homme et vous êtes mineur<br>
                    Vous êtes une femme et vous êtes majeur<br>
                    Vous êtes une femme et vous êtes mineur<br>
                    Gérer tous les cas.
                </div>
            </div>
        </div>
    </div>


    <div class="container dotted p-4 mt-4">
        <div class="row">
            <div class="col-10 offset-1">

                <p>
                    <?= $msg?>
                </p>

            </div>


        </div>
    </div>

</body>

</html>