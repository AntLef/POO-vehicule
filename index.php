<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>POO Projet</title>
</head>
<body>

<?php

    require_once('class/voiture.php');
    echo "<br>Votre voiture";

    $voiture =new Voiture(1,1,1,55,"thermique",1000,"Bleue",57,4,4,3,2);
    $voiture->getSpeed();
    $voiture->Accelerate(57,1);
    $voiture->getSpeed(); 
    echo "<br>";

    require_once('class/moto.php');
    echo "<br>Votre moto";

    $moto =new Moto(1,1,1,55,"thermique",250,"Noir",57,2,1,2,1);

    $moto->getSpeed();
    $moto->Accelerate(57,1);
    $moto->getSpeed(); 
    echo "<br>";

    require_once('class/camion.php');
    echo "<br>Votre voiture";

    $camion =new Camion(1,1,1,55,"thermique",2000,"Blanc",57,2,1,2,1);

    $camion->getSpeed();
    $camion->Accelerate(57,1);
    $camion->getSpeed(); 
    echo "<br>";
//PARTIE AIR !!!!!!!!!!!
    require_once('class/AvionRéaction.php');
    echo "<br>Votre Avion à réaction";

    $avionReaction =new AvionReaction(1,1,1,100,"thermique",3000,"Rouge",300,3,0,3,500,500,10);

    $avionReaction->getSpeed();
    $avionReaction->Accelerate(300,1);
    $avionReaction->getSpeed(); 
    echo "<br>";

    require_once('class/Avionhélice.php');
    echo "<br>Votre Avion à hélice";

    $avionHelice =new AvionHelice(1,1,1,80,"thermique",3000,"Rouge",250,3,0,3,500,500);

    $avionHelice->getSpeed();
    $avionHelice->Accelerate(250,1);
    $avionHelice->getSpeed(); 
    echo "<br>";

    require_once('class/helico.php');
    echo "<br>Votre helico";

    $helico =new helico(1,1,1,70,"thermique",3000,"Rouge",220,3,0,3,500,500,250);

    $helico->getSpeed();
    $helico->Accelerate(250,1);
    $helico->getSpeed(); 
    echo "<br>";

    //partie Eau 
    require_once('class/bateau a voile.php');
    echo "<br>Votre bateau a voile";

    $bateauavoile =new bateauavoile(2,2,2,80,"vent",5000,"Blanc",300,500,500,10,2,2);

    $bateauavoile->getSpeed();
    $bateauavoile->Accelerate(90,50);
    $bateauavoile->getSpeed(); 
    echo "<br>";

    require_once('class/bateau a moteur.php');
    echo "<br>Votre bateau a moteur";

    $bateauamoteur =new bateauamoteur(2,2,2,100,"vent",5000,"Bleue",300,500,500,10);

    $bateauamoteur->getSpeed();
    $bateauamoteur->Accelerate(250,150);
    $bateauamoteur->getSpeed(); 
    echo "<br>";

    require_once('class/Sous-marin.php');
    echo "<br>Votre Sous-Marin";

    $SousMarin =new SousMarin(3,3,3,90,"Thermique",10000,"Noir",350,1000,1000,200,20,5,1000,2);

    $SousMarin->getSpeed();
    $SousMarin->Accelerate(350,300);
    $SousMarin->getSpeed(); 
    echo "<br>";
    
    
/* objectif = appeler voiture, augmenter vitesse voiture quand bouton on, afficher les infos de la voiture, 
    Òafficher vitesse voiture quand vitesse = 57 */

?>
</body>
</html>