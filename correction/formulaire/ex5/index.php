<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./public/assets/css/styles.css">
    <title>Exercice 5</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <form method="POST">

                    <div class="form-group">
                        <label for="civility" class="form-label mt-4">Civilité</label>
                        <select class="form-select" id="civility" name="civility">
                            <option>Mme</option>
                            <option>M</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="col-form-label col-form-label-lg mt-4" for="lastname">Nom</label>
                        <input name="lastname" class="form-control form-control-lg" type="text" placeholder="Entrez votre nom" id="lastname">
                    </div>

                    <div class="form-group">
                        <label class="col-form-label col-form-label-lg mt-4" for="firstname">Prénom</label>
                        <input name="firstname" class="form-control form-control-lg" type="text" placeholder="Entrez votre prénom" id="firstname">
                    </div>

                    <div class="form-group">
                        <input type="submit" class="mt-4 btn btn-success" value="Envoyer" />
                    </div>

                </form>
            </div>
        </div>
    </div>






</body>

</html>