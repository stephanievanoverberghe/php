<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./public/assets/css/style.css">
    <title>User</title>
</head>

<body>
    <h1 class="text-center">Message bien reçu !</h1>
    <div class="card offset-md-3 col-md-6">
        <div class=" text-center mb-3 mt-3">
            <h5>Rappel de vos informations</h5>
            <p><b>Nom</b> : <?php echo $_GET['lastname']; ?></p>
            <p><b>Prénom</b> : <?php echo $_GET['firstname']; ?></p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="./public/assets/js/script.js"></script>
</body>

</html>