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
                    <h2><span class="badge badge-dark">Exercice 6</span></h2>
                    Traduire ce code avec des if et des else :<br>
                    echo ($age >= 18) ? 'Tu es majeur' : 'Tu n\'es pas majeur'
                </div>
            </div>
        </div>
    </div>


    <div class="container dotted p-4 mt-4">
        <div class="row">
            <div class="col-10 offset-1">

                <p>
                    <pre>
                        if ($age >= 18) {
                            echo 'Tu es majeur';
                        } else {
                            echo 'Tu n\'es pas majeur';
                        }
                    </pre>
                    <?php
                        $age = 25;
                        if ($age >= 18) {
                            echo 'Tu es majeur';
                        } else {
                            echo 'Tu n\'es pas majeur';
                        }
                    ?>
                </p>

            </div>


        </div>
    </div>

</body>

</html>