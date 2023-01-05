<!-- Variables PHP-->

<?php 
// Exercice 1
    $name ='Stéphanie';
    $email ='orangestreet@live.fr';
    $password ='cuba360°!';

// Exercice 2
    $lastname ='Vanoverberghe';
    $firstname ='Stéphanie';
    $age = 39;

// Exercice 3
    $km = 1;

// Exercice 4
    $typeDeVoiture = 'Ferrari';
    $anneeCirculation = 2006;
    $nombreKm = 5006.5;
    $majeur = true;
    $mineur = false;

// Exercice 5
    $numberRien = null;

// Exercice 6
    $name1 = 'Mathieu';

// Exercice 7
    $lastname1 = 'Styles';
    $firstname1 = 'Harry';
    $age1 = 28;

// Exercice 8
    $result1 = 3 + 4;
    $result2 = 5 * 20;
    $result3 = 45 / 5;

?>



<!-- HTML -->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./public/assets/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Connexion</title>
</head>
<body>
    <header id="header">

        <!-- Début navBar -->

        <nav class="navbar navbar-expand-md navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="./index.html"><img src="./public/assets/img/logo.png" alt="" width="100"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a aria-current="page" href="./formation.html">Formation</a>
                        </li>
                        <li class="nav-item">
                            <a aria-current="page" href="./forums.html">Forums</a>
                        </li>
                        <li class="nav-item">
                            <a aria-current="page" href="./magazine.html">Magazine</a>
                        </li>
                    </ul>
                    <button class="btn btn-outline" type="submit">Se connecter</button>
                    <button class="btn btn-outline" type="submit">S'inscrire</button>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2>
                        Inscription
                    </h2>
                    <h3 class="mb-4">ou <a href="./inscription.html">crée un compte</a></h3>
                </div>
                <div class="offset-md-3 col-md-6 text-center mb-3">
                    <form>
                        <div class="mb-3">
                            <label for="text" class="form-label">Nom</label>
                            <input type="text" class="form-control" aria-describedby="name" placeholder="<?php echo $lastname; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="text" class="form-label">Prénom</label>
                            <input type="text" class="form-control" aria-describedby="lastname" placeholder="<?php echo $name; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="number" class="form-label">Age</label>
                            <input type="number" class="form-control" aria-describedby="number" placeholder="<?php echo $age; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Adresse Email</label>
                            <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="<?php echo $email; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
                            <input type="password" class="form-control" placeholder="<?php echo $password; ?>">
                        </div>
                        <p><?php echo $km; $km=3; ?> + <?php echo $km; $km=125; ?> + <?php echo $km; ?> = <input type="number"></input></p>
                        
                        <button type="submit" class="btn btn-outline">Valider</button>
                    </form>
                    <br>
                    <p><?php echo 'Type de véhicule : ' . $typeDeVoiture; ?></p>
                    <p><?php echo 'Année de mise en circulation : ' . $anneeCirculation; ?></p>
                    <p><?php echo 'Nombres de kilomètres : ' . $nombreKm . ' km'; ?></p>
                    <p><?php echo 'Majeur : ' . $majeur; ?></p>
                    <p><?php echo 'Mineur : ' . $mineur; ?></p>
                    <p><?php echo $numberRien=6; ?></p>
                    <p><?php echo 'Bonjour ' . $name1 . ', comment vas-tu ?'; ?></p>
                    <p><?php echo 'Bonjour ' . $lastname1 . ' ' . $firstname1 . ', tu as ' . $age1 . ' ans.'; ?></p>
                    <p><?php echo $result1; ?></p>
                    <p><?php echo $result2; ?></p>
                    <p><?php echo $result3; ?></p>
                </div>
                <div class="col-12 border-bottom my-3 mt-5">

                </div>
            </div>
        </div>
    </main>

    <footer class="mb-5">
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-2 col-12 text-center mb-5">
                    <div class="row">
                        <div class="col-12">
                            <h6>
                                AIDE
                            </h6>
                        </div>
                        <div class="col-12">
                            <a href="">
                                Me contacter
                            </a>
                        </div>
                        <div class="col-12">
                            <a href="">
                                FAQ
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 text-center mb-5">
                    <div class="row">
                        <div class="col-12">
                            <h6>
                                INFORMATIONS LÉGALES
                            </h6>
                        </div>
                        <div class="col-12">
                            <a href="">
                                Mentions légales
                            </a>
                        </div>
                        <div class="col-12">
                            <a href="">
                                Conditions générales d'utilisation
                            </a>
                        </div>
                        <div class="col-12">
                            <a href="">
                                Politique de protection des données personnelles
                            </a>
                        </div>
                        <div class="col-12">
                            <a href="">
                                Cookies
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12 text-center">
                    <div class="row">
                        <div class="col-12">
                            <h6 class="mb-5">
                                RÉSEAUX SOCIAUX
                            </h6>
                        </div>
                        <div class="col-4">
                            <a href="https://www.facebook.com/lalchimiste2compostelle/" target="_blank"><img src="./public/assets/img/facebook (1).png" alt="Logo Facebook" width="50"></a>
                        </div>
                        <div class="col-4">
                            <a href="https://www.instagram.com/lalchimiste_creations/" target="_blank"><img src="./public/assets/img/instagram.png" alt="Logo Instagram" width="50"></a>
                        </div>
                        <div class="col-4">
                            <a href="https://www.youtube.com/channel/UCnez55mgM1Cpp3RMYJ5Xnkg" target="_blank"><img src="./public/assets/img/youtube (1).png" alt="Logo YouYube" width="50"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="./public/assets/js/script.js"></script>

</body>
</html>