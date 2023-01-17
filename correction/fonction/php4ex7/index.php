<?php
//déclaration de la fonction retournant une phrase selon la condition
function ageAndGender($gender, $age){
    $gender = strtolower($gender);
    if ($age > 0) {
        if ($gender == 'homme' || $gender == 'femme' ) {
            //condition comparant le genre et l'âge
            if ($gender == 'homme' && $age >= 18) {
                $message = 'Vous êtes un homme et vous êtes majeur';
            }elseif ($gender == 'homme' && $age < 18) {
                $message = 'Vous êtes un homme et vous êtes mineur';
            }elseif ($gender == 'femme' && $age >= 18) {
                $message = 'Vous êtes une femme et vous êtes majeure';
            }elseif ($gender == 'femme' && $age < 18) {
                $message = 'Vous êtes une femme et vous êtes mineure';
            }else {
                $message = 'Vous n\'êtes pas humain';
            }
        } else {
            $message = 'Vous êtes non-binaire';
        }
    } else {
        $message = 'Entrez un âge valide';
    }
    return $message;
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
                    <h2><span class="badge badge-dark">Exercice 7</span></h2>
                    Faire une fonction qui prend deux paramètres : l'âge et le genre d'une personne.<br>
                    Le genre peut être un Homme ou une Femme<br>
                    La fonction doit renvoyer en fonction des paramètres :<br>
                    - Vous êtes un homme et vous êtes majeur<br>
                    - Vous êtes un homme et vous êtes mineur<br>
                    - Vous êtes une femme et vous êtes majeur<br>
                    - Vous êtes une femme et vous êtes mineur<br>
                    Gérer tous les cas
                </div>
            </div>
        </div>
    </div>


    <div class="container dotted p-4 mt-4">
        <div class="row">
            <div class="col-10 offset-1">

                <p>
                    <?= ageAndGender('FEMME', '19'); ?>
                </p>

            </div>

        </div>
    </div>

</body>

</html>