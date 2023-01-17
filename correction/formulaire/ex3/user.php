<?php

$firstname = $_GET['firstname'];
$lastname = $_GET['lastname'];

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./public/assets/css/styles.css">
    <title>Exercice 3</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <p class="text-primary"><span class="fw-bold">Nom :</span> <?= $lastname ?></p>
                <p class="text-primary"><span class="fw-bold">Prénom :</span> <?= $firstname ?></p>
            </div>
        </div>
    </div>


</body>

</html>