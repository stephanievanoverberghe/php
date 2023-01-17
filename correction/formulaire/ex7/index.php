<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $civility = $_POST['civility'];

    // Si le champs est obligatoire, il doit bloquer tout le traitement.
    // On vérifie donc côté back
    if (empty($_POST['lastname'])) {
        $errorLastname = 'Champs obligatoire!';
    } else {
        $lastname = $_POST['lastname'];
    }

    $firstname = $_POST['firstname'];

    $cvFile = $_FILES['cvFile']['name'];
    
    $extension = pathinfo($cvFile, PATHINFO_EXTENSION);

}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./public/assets/css/styles.css">
    <title>Exercice 7</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">


                <?php
                if ($_SERVER['REQUEST_METHOD'] != 'POST' || empty($lastname)) {
                ?>
                    <form method="POST" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="civility" class="form-label mt-4">Civilité</label>
                            <select class="form-select" id="civility" name="civility">
                                <option>Mme</option>
                                <option>M</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="col-form-label col-form-label-lg mt-4" for="lastname">Nom</label>
                            <input name="lastname" class="form-control form-control-lg" type="text" placeholder="Entrez votre nom" id="lastname" required>
                            <?= $errorLastname ?? '' ?>
                        </div>

                        <div class="form-group">
                            <label class="col-form-label col-form-label-lg mt-4" for="firstname">Prénom</label>
                            <input value="<?= $firstname ?? '' ?>" name="firstname" class="form-control form-control-lg" type="text" placeholder="Entrez votre prénom" id="firstname">
                        </div>

                        <div class="form-group">
                            <label for="cvFile" class="form-label mt-4">CV</label>
                            <input class="form-control" type="file" id="cvFile" name="cvFile">
                        </div>

                        <div class="form-group">
                            <input type="submit" class="mt-4 btn btn-success" value="Envoyer" />
                        </div>

                    </form>
                <?php
                } else {
                ?>

                    <p class="text-primary">
                        Bonjour <?= $civility ?> <?= $lastname ?> <?= $firstname ?>. Comment allez-vous?<br>
                        Vous avez transféré le fichier : <?=$cvFile?><br>
                        L'extension du fichier est : <?=$extension?>
                    </p>

                <?php
                }
                ?>


            </div>
        </div>
    </div>






</body>

</html>