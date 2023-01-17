<?php

    $month = 01;
    $year = 2023;

    $firstDayOfMonth = date('N', strtotime("$year-$month-01")-1); //6
    $nbrDaysInMonth = cal_days_in_month(CAL_GREGORIAN, $month, $year); //31
    $lastDayOfMonth = date('N', strtotime("$year-$month-$nbrDaysInMonth"));// 2;
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/assets/css/style.css">
    <title>TP Calendar</title>
</head>

<body>
    <div class="grid-container">
        <div class="weekDaysName">Lundi</div>
        <div class="weekDaysName">Mardi</div>
        <div class="weekDaysName">Mercredi</div>
        <div class="weekDaysName">Jeudi</div>
        <div class="weekDaysName">Vendredi</div>
        <div class="weekDaysName">Samedi</div>
        <div class="weekDaysName">Dimanche</div>

        <?php
        for ($i=1; $i <= $firstDayOfMonth; $i++) { 
            echo '<div class="weekDays"></div>';
        }

        for ($i=1; $i <= $nbrDaysInMonth; $i++) { 
            echo '<div class="weekDays">' . $i . '</div>';
        }

        for ($i=1; $i <= 7-$lastDayOfMonth; $i++) { 
            echo '<div class="weekDays"></div>';
        }

        ?>

    </div>
</body>

</html>