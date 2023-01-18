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
        <form action="" method="post" role="form" id="formInscription">
            <fieldset>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="lastname" class="form-label">Nom<span class="orange"> *</span></label>
                        <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Ton nom" size="45" pattern="[a-zA-ZàâæçéèêëîïôœùûüÿÀÂÆÇnÉÈÊËÎÏÔŒÙÛÜŸ-]+" required>
                        <p class="comments">Message d'erreur !</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="email" class="form-label">Email<span class="orange"> *</span></label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Ton adresse mail" size="30" required>
                        <p class="comments">Message d'erreur !</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="password" class="form-label">Mot de passe<span class="orange"> *</span></label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Ton mot de passe" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2, 3}$" minlength="8" required>
                        <p class="comments">Message d'erreur !</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="dateBirthday" class="form-label">Date de naissance<span class="orange"> *</span></label>
                        <input type="date" name="dateBirthday" class="form-control" id="dateBirthday" value="2023-01-18" min="1935-01-01" max="2005-01-01" required>
                        <p class="comments">Message d'erreur !</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="paysBirth" class="form-label">Pays de naissance<span class="orange"> *</span></label>
                        <select name="paysBirth" name="paysBirth" id="paysBirth" class="form-select" pattern="[a-zA-ZàâæçéèêëîïôœùûüÿÀÂÆÇnÉÈÊËÎÏÔŒÙÛÜŸ-]+" required>
                            <option value=""></option>
                        </select>
                        <p class="comments">Message d'erreur !</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="codePostal" class="form-label">Code postal<span class="orange"> *</span></label>
                        <input type="text" name="codePostal" class="form-control" id="codePostal" placeholder="Ton code postal" pattern="[0-9]{5}" required>
                        <p class="comments">Message d'erreur !</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="niveauEtude" class="form-label">Niveau d'étude</label>
                        <select name="niveauEtude" id="niveauEtude" class="form-select">
                            <option value="">Sans diplôme</option>
                            <option value="">Bac</option>
                            <option value="">Bac + 2</option>
                            <option value="">Bac + 3</option>
                            <option value="">Supérieur</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="formFile" class="form-label">Photo de profil</label>
                        <input name="formFile" class="form-control" type="file" id="formFile" accept="image/png, image/jpeg, image/jpg">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="url" class="form-label">URL compte link</label>
                        <input name="url" class="form-control" type="url" id="url" placeholder="https://example.com" pattern="https://.*" size="30">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="language">Langages web connu</label>
                        <div class="form-check mt-3">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                HTML/CSS
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="">
                            <label class="form-check-label" for="flexCheckChecked">
                                PHP
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="">
                            <label class="form-check-label" for="flexCheckChecked">
                                JavaScript
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="">
                            <label class="form-check-label" for="flexCheckChecked">
                                Python
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="">
                            <label class="form-check-label" for="flexCheckChecked">
                                Autres
                            </label>
                        </div>
                    </div>
                    <div class="col-12 mb-3">
                        <label for="textMessage" class="form-label">Racontes une expérience</label>
                        <textarea class="form-control" id="textMessage" name="textMessage" rows="6" placeholder="Racontes une expérience avec la programmation et/ou l'informatique que tu aurais pu avoir."></textarea>
                    </div>
                    <div class="col-12 text-start mb-3">
                        <p class="orange">* Ces informations sont requises</p>
                    </div>
                    <div class="col-12 text-center my-3">
                        <input class="btn py-2 px-5" type="submit" id="button" value="S'inscrire"></input>
                    </div>
                    <div class="col-12 text-center mb-3">
                        <p class="inscriptValid">Ton inscription a bien été pris en compte.</p>
                    </div>
                </div>

            </fieldset>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>