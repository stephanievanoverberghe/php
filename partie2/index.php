<!-- Variables PHP-->

<?php 
// Exercice 1
    $age = 19;

// Exercice 2
    $inEasy = true;

// Exercice 3
    $age1 = 12;
    $gender = false;

// Exercice 4
    $magnitude = 9;

// Exercice 5


// Exercice 6


// Exercice 7
    $isOk = true;

// Exercice 8

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
                <div class="col-12 border-bottom my-3 mt-5">

                </div>
                <div class="offset-md-3 col-md-6 text-center mb-3 mt-3">
                    <p>Exercice 1</p>
                    <?php
                        if ($age >= 18) {
                            echo "Vous êtes majeur.";
                        }
                        else {
                            echo "Vous êtes mineur.";
                        }
                    ?>
                </div>
                <div class="offset-md-3 col-md-6 text-center mb-3 mt-3">
                    <p>Exercice 2</p>
                    <?php
                        if ($inEasy) {
                            echo "C'est facile !!";
                        }
                        else {
                            echo "C'est difficile !!!";
                        }
                    ?>
                    <br>
                    <?php
                        echo ($inEasy == false) ? "C'est facile !!" : "C'est difficile !!!";
                    ?>
                </div>
                <div class="offset-md-3 col-md-6 text-center mb-3 mt-3">
                    <p>Exercice 3</p>
                    <?php
                        if ($age1 >= 18 && $gender == true) {
                            echo "Vous êtes une femme et vous êtes majeure.";
                        }
                        else if ($age1 < 18 && $gender == true) {
                            echo "Vous êtes un femme et vous êtes mineure.";
                        }
                        else if ($age1 >= 18 && $gender == false) {
                            echo "Vous êtes un homme et vous êtes majeur.";
                        }
                        else if ($age1 < 18 && $gender == false) {
                            echo "Vous êtes un homme et vous êtes mineur.";
                        }
                    ?>
                </div>
                <div class="offset-md-3 col-md-6 text-center mb-3 mt-3">
                    <p>Exercice 4</p>
                    <?php
                        switch ($magnitude) {
                            case 1:
                                echo "Magnitude 1 : Micro-séisme impossible à ressentir.";
                            break;

                            case 2:
                                echo "Magnetude 2 : Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.";
                            break;

                            case 3:
                                echo "Magnetude 3 : Ne cause pas de dégâts mais commence à pouvoir être légèrement ressenti.";
                            break;

                            case 4:
                                echo "Magnetude 4 : Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.";
                            break;

                            case 5:
                                echo "Magnetude 5 : Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégâts sur des bâtiments modernes.";
                            break;

                            case 6:
                                echo "Magnetude 6 : Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.";
                            break;

                            case 7:
                                echo "Magnetude 7 : Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.";
                            break;

                            case 8:
                                echo "Magnetude 8 : Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.";
                            break;

                            case 9:
                                echo "Magnetude 9 : Séisme capable de tout détruire sur une très vaste zone.";
                            break;

                            default:
                                echo 'ERROR';
                        }
                    ?>
                </div>
                <div class="offset-md-3 col-md-6 text-center mb-3 mt-3">
                    <p>Exercice 5</p>
                    <?php
                        if ($gender != "Homme"){
                            echo "C'est une développeuse !!!";
                        } else {
                            echo "C'est une développeur";
                        };
                    ?>
                </div>
                <div class="offset-md-3 col-md-6 text-center mb-3 mt-3">
                    <p>Exercice 6</p>
                    <?php
                        if ($age >= 18){
                            echo "Tu es majeur";
                        } else {
                            echo "Tu n'est pas majeur";
                        };
                    ?>
                </div>
                <div class="offset-md-3 col-md-6 text-center mb-3 mt-3">
                    <p>Exercice 7</p>
                    <?php
                        if ($isOk == false){
                            echo "C'est pas bon !!!";
                        } else {
                            echo "C'est ok";
                        };
                    ?>
                </div>
                <div class="offset-md-3 col-md-6 text-center mb-3 mt-3">
                    <p>Exercice 8</p>
                    <?php
                        if ($isOk){
                            echo "C'est ok";
                        } else {
                            echo "c'est pas bon !!!";
                        };
                    ?>
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