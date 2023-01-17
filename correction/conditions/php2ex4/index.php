<?php

// 1 	Micro-séisme impossible à ressentir.
// 2 	Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.
// 3 	Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.
// 4 	Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.
// 5 	Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.
// 6 	Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.
// 7 	Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.
// 8 	Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.
// 9 	Séisme capable de tout détruire sur une très vaste zone.


$magnitude = 5;
switch ($magnitude){
    case 1:
        $msg = 'Micro-séisme impossible à ressentir.';
        break; //break pour arrêter le switch si un des cas est validé

    case 2:
        $msg = 'Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.';
        break;

    case 3:
        $msg = 'Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.';
        break;

    case 4:
        $msg = 'Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.';
        break;

    case 5:
        $msg = 'Séisme capable d\'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.';
        break;

    case 6:
        $msg = 'Fort séisme capable d\'engendrer des destructions majeures sur une large distance (180 km) autour de l\'épicentre.';
        break;

    case 7:
        $msg = 'Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.';
        break;

    case 8:
        $msg = 'Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.';
        break;

    case 9:
        $msg = 'Séisme capable de tout détruire sur une très vaste zone.';
        break;

    default:
        $msg = 'On va tous mourir !'; //break facultatif dans le default car c'est déjà la fin du switch
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
                <h1 class="text-center">PHP : Les conditions</h1>

                <div class="label w-100 p-2 pl-5 mt-4">
                    <h2><span class="badge badge-dark">Exercice 4</span></h2>
                    L'échelle de Richter est un outil de mesure qui permet de définir la magnitude de moment d'un
                    tremblement de
                    terre. Cette échelle va de 1 à 9.
                    Créer une variable magnitude. Selon la valeur de magnitude, afficher la phrase correspondante.<br>
                    <br>
                    Gérer tous les cas.<br>
                    Utiliser autre chose que des if else<br>
                    Voir le détail de l'echelle dans le code.
                </div>
            </div>
        </div>
    </div>


    <div class="container dotted p-4 mt-4">
        <div class="row">
            <div class="col-10 offset-1">

                <p>
                    <?=$msg?>
                </p>

            </div>


        </div>
    </div>

</body>

</html>