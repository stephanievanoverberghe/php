<?php

// CONSTANTE REGEX

define('REGEXP_LETTERS', '^[a-zA-ZàâæçéèêëîïôœùûüÿÀÂÆÇnÉÈÊËÎÏÔŒÙÛÜŸ-]*$');
define('REGEXP_LINKEDIN', '^(http(s)?:\/\/)?([\w]+\.)?linkedin\.com\/(pub|in|profile)*$');
define('REGEXP_CODEPOSTAL', '^(0[1-9]|[1-8][0-9]|9[0-8])[0-9]{3}$');


// TABLEAUX

define('ARRAY_COUNTRY', ['France', 'Belgique', 'Espagne', 'Allemagne', 'Luxembourg', 'Suisse', 'Italie']);
define('ARRAY_RADIO', ['Sans diplôme', 'Bac', 'Bac+2', 'Supérieur']);


// EMAIL _____ Nettoyage et validation _____________________________________________________________________________

if ($_SERVER['REQUEST_METHOD'] == 'POST') { //Si les données sont bien envoyées en POST

    $email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL)); // Double nettoyage de l'email récupéré 
    $error = [];

    if (empty($email)) { //Si $email est vide
        $error['email'] = 'Champ obligatoire !'; //Message d'erreur EMAIL
        
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) { //Sinon si $email ne correspond pas à un format d'adresse email
        $error['email'] = 'Champ non valide !'; //Message d'erreur EMAIL format
    }


    // LASTNAME _____ Nettoyage et validation _____________________________________________________________________________

    $lastname = trim(filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_SPECIAL_CHARS));

    if (empty($lastname)) { //si ma variable email est vide
        $error['lastname'] = 'Champs obligatoire!'; // j'affiche l'erreur

    } else {
        $isOk =  filter_var($lastname, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => '/' . REGEXP_LETTERS . '/')));
        if (!$isOk) {
            $error['lastname'] = "Le nom ne correspond pas au format requis."; // j'affiche le nouveau message correspondant
        }
    }
}


    // URL _____ Nettoyage et validation _____________________________________________________________________________

    $url = trim(filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL)); // Double nettoyage de l'URL récupéré 

    if (empty($url)) { //Si $url est vide
        $error['url'] = 'Champ obligatoire !'; //Message d'erreur URL

    } else {
        // ! si elle renvoit false si elle ne valide pas notre donnée
        if (!filter_var($url, FILTER_VALIDATE_REGEXP,array("options"=>array("regexp"=>'/'.REGEXP_LINKEDIN.'/')))) { // si mon email ne correspond pas au filtre
            $error['url'] = "L'url ne correspond pas au format requis."; // j'affiche le nouveau message correspondant
        }
    }


    // CODE POSTAL _____ Nettoyage et validation _____________________________________________________________________________

    $codePostal = trim(filter_input(INPUT_POST, 'codePostal', FILTER_SANITIZE_NUMBER_INT)); // Double nettoyage du code postal récupéré 

    if (empty($codePostal)) { //Si $codePostal est vide
        $error['codePostal'] = 'Champ obligatoire !'; //Message d'erreur CODE POSTAL 

    } elseif (!filter_var($codePostal, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>'/'.REGEXP_CODEPOSTAL.'/')))) { //Sinon si $codePostal ne correspond pas à un format URL
        $error['codePostal'] = 'Champ non valide !'; //Message d'erreur CODE POSTAL format
    }


    // PAYS DE NAISSANCE _____ Nettoyage et validation _____________________________________________________________________________

    $paysBirth = trim(filter_input(INPUT_POST, 'paysBirth', FILTER_SANITIZE_SPECIAL_CHARS)); // Double nettoyage du pays de naissance récupéré 

    if (!in_array($paysBirth, ARRAY_COUNTRY)) {
        $error['paysBirth'] = 'Champ obligatoire !';
    }
    

    // NIVEAU D'ETUDE _____ Nettoyage et validation _____________________________________________________________________________

    $radio = trim(filter_input(INPUT_POST, 'radio', FILTER_SANITIZE_SPECIAL_CHARS)); // Double nettoyage du pays de naissance récupéré 

    if (!in_array($radio, ARRAY_RADIO)) {
        $error['radio'] = 'Champ obligatoire !';
    }

    
    // LANGAGES WEB _____ Nettoyage et validation _____________________________________________________________________________

    // $language = trim(filter_input(INPUT_POST, 'language[]', FILTER_SANITIZE_EMAIL)); // Double nettoyage du langages web récupéré 

    // if (empty($language)) { //Si $language est vide
    //     $error['language[]'] = 'Champ obligatoire !'; //Message d'erreur EMAIL
        
    // } elseif (!filter_var($language, FILTER_VALIDATE_EMAIL)) { //Sinon si $language ne correspond pas à un format d'adresse email
    //     $error['language[]'] = 'Champ non valide !'; //Message d'erreur EMAIL format
    // }



    // DATE DE NAISSANCE _____ Nettoyage et validation _____________________________________________________________________________


?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./public/assets/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP Formulaire</title>
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 py-5">
                <h1 class="text-center py-3">Inscription</h1>
            </div>
        </div>
    </div>


    <div class="container">

        <?php
        if ($_SERVER['REQUEST_METHOD'] != 'POST' || !empty($error)) {
        ?>

            <!-- Début du formulaire -->

            <form method="post" id="formInscription" novalidate>
                <fieldset>
                    <div class="row">

                        <!-- Le Nom -->

                        <div class="col-md-6 mb-3">
                            <label for="lastname" class="form-label">Nom<span class="orange"> *</span></label>
                            <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Ton nom" title="Le nom n'est pas valide" autocomplete="on" value="<?= $lastname ?? ''; ?>" pattern="<?= REGEXP_LETTERS ?>">
                            <p class="comments"><?= $error['lastname'] ?? '' ?></p>
                        </div>

                        <!-- L'email -->

                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label">Email<span class="orange"> *</span></label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Ton adresse mail" autocomplete="on" value="<?= $email ?? ''; ?>">
                            <p class="comments"><?= $error['email'] ?? '' ?></p>
                        </div>

                        <!-- Le mot de passe -->

                        <div class="col-md-6 mb-3">
                            <label for="password" class="form-label">Mot de passe<span class="orange"> *</span></label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="Ton mot de passe" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2, 3}$" minlength="8">
                            <p class="comments">Message d'erreur !</p>
                        </div>

                        <!-- Confirmation du mot de passe -->

                        <div class="col-md-6 mb-3">
                            <label for="confirmPassword" class="form-label">Confirmation du mot de passe<span class="orange"> *</span></label>
                            <input type="password" name="confirmPassword" class="form-control" id="confirmPassword" placeholder="Ton mot de passe" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2, 3}$" minlength="8">
                            <p class="comments">Message d'erreur !</p>
                        </div>

                        <!-- La date de naissance -->

                        <div class="col-md-6 mb-3">
                            <label for="dateBirthday" class="form-label">Date de naissance</label>
                            <input type="date" name="dateBirthday" class="form-control" id="dateBirthday" value="2023-01-18" min="1935-01-01" max="2005-01-01" autocomplete="on">
                        </div>

                        <!-- Le pays de naissance -->

                        <div class="col-md-6 mb-3">
                            <label for="paysBirth" class="form-label">Pays de naissance</label>
                            <select name="paysBirth" name="paysBirth" id="paysBirth" class="form-select">
                                <?php
                                    foreach (ARRAY_COUNTRY as $country){
                                        echo "<option>$country</option>";
                                    }
                                ?>
                            </select>
                        </div>

                        <!-- Le code postal -->

                        <div class="col-md-6 mb-3 mt-3">
                            <label for="codePostal" class="form-label">Code postal</label>
                            <input type="text" name="codePostal" class="form-control" id="codePostal" placeholder="Ton code postal" pattern="<?= REGEXP_CODEPOSTAL ?>">
                            <p class="comments"><?= $error['codePostal'] ?? '' ?></p>
                        </div>

                        <!-- L'url -->

                        <div class="col-md-6 mb-3 mt-3">
                            <label for="url" class="form-label">URL compte link</label>
                            <input name="url" class="form-control" type="url" id="url" placeholder="https://example.com" value="<?= $url ?? ''; ?>" pattern="<?= REGEXP_LINKEDIN ?>">
                            <p class="comments"><?= $error['url'] ?? '' ?></p>
                        </div>

                        <!-- La photo de profil -->

                        <div class="col-md-6 mb-3 mt-3">
                            <label for="formFile" class="form-label">Photo de profil</label>
                            <input name="formFile" class="form-control" type="file" id="formFile" accept="image/png, image/jpeg, image/jpg">
                        </div>

                        <!-- Le niveau d'étude -->

                        <div class="col-md-3 mb-3 mt-3">
                            <label for="">Niveau d'étude</label>
                            <div class="form-check mt-3">
                                <input class="form-check-input" type="radio" name="radio" id="radio" checked>
                                <label class="form-check-label" for="radio">
                                    Sans diplôme
                                </label>
                            </div>
                            <div class="form-check mt-3">
                                <input class="form-check-input" type="radio" name="radio" id="radio">
                                <label class="form-check-label" for="radio">
                                    Bac
                                </label>
                            </div>
                            <div class="form-check mt-3">
                                <input class="form-check-input" type="radio" name="radio" id="radio">
                                <label class="form-check-label" for="radio">
                                    Bac + 2
                                </label>
                            </div>
                            <div class="form-check mt-3">
                                <input class="form-check-input" type="radio" name="radio" id="radio">
                                <label class="form-check-label" for="radio">
                                    Supérieur
                                </label>
                            </div>
                        </div>

                        <!-- Les langages web connus -->

                        <div class="col-md-3 mb-3 mt-3">
                            <label for="language">Langages web connus</label>
                            <div class="form-check mt-3">
                                <input class="form-check-input" type="checkbox" value="html" id="flexCheckDefault" name="language[]">
                                <label class="form-check-label" for="flexCheckDefault">
                                    HTML/CSS
                                </label>
                            </div>
                            <div class="form-check mt-2">
                                <input class="form-check-input" type="checkbox" value="php" name="language[]">
                                <label class="form-check-label" for="flexCheckChecked">
                                    PHP
                                </label>
                            </div>
                            <div class="form-check mt-2">
                                <input class="form-check-input" type="checkbox" value="javascript" name="language[]">
                                <label class="form-check-label" for="flexCheckChecked">
                                    JavaScript
                                </label>
                            </div>
                            <div class="form-check mt-2">
                                <input class="form-check-input" type="checkbox" value="python" name="language[]">
                                <label class="form-check-label" for="flexCheckChecked">
                                    Python
                                </label>
                            </div>
                            <div class="form-check mt-2">
                                <input class="form-check-input" type="checkbox" value="autres" name="language[]">
                                <label class="form-check-label" for="flexCheckChecked">
                                    Autres
                                </label>
                            </div>
                        </div>

                        <!-- Raconter une expérience -->

                        <div class="col-12 mb-3 mt-3">
                            <label for="textMessage" class="form-label">Racontes une expérience</label>
                            <textarea class="form-control" id="textMessage" name="textMessage" rows="6" placeholder="Racontes une expérience avec la programmation et/ou l'informatique que tu aurais pu avoir."></textarea>
                        </div>

                        <!-- Info requises -->

                        <div class="col-12 text-start mb-3">
                            <p class="orange">* Ces informations sont requises</p>
                        </div>

                        <!-- Button -->

                        <div class="col-12 text-center my-3">
                            <input class="btn py-2 px-5" type="submit" id="button" value="S'inscrire"></input>
                        </div>

                        <!-- Message de validation d'inscription -->

                        <div class="col-12 text-center mb-3">
                            <p class="inscriptValid">Ton inscription a bien été pris en compte.</p>
                        </div>
                    </div>
                </fieldset>
            </form>

        <?php
        } else {
        ?>
            <p class=""><?= $email ?></p>
            <p class=""><?= $lastname ?></p>
            <p class=""><?= $url ?></p>
            <p class=""><?= $codePostal ?></p>
            <p class=""><?= $paysBirth ?></p>
    </div>

<?php
        }
?>

<!-- Fin du formulaire -->

</div>
<script src="./public/assets/js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>