<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>POO Projet</title>
</head>
<body>

<?php

    require_once('class/voiture.php');

    $voiture =new Voiture(1,1,1,55,"thermique",1000,"Bleue",57,4,4,3,1);

    $voiture->getSpeed();
    $voiture->Accelerate(57,1);
    $voiture->getSpeed(); 


/* objectif = appeler voiture, augmenter vitesse voiture quand bouton on, afficher les infos de la voiture, 
    Òafficher vitesse voiture quand vitesse = 57 */

?>
</body>
</html>