<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>POO Projet</title>
</head>
<body>

<?php

    require_once('class/voiture.php');
    require_once('class/moto.php');
    require_once('class/camion.php');
    require_once('class/AvionReaction.php');
    require_once('class/Avionhelice.php');
    require_once('class/helico.php');
    require_once('class/bateau a voile.php');
    require_once('class/bateau a moteur.php');
    require_once('class/Sous-marin.php');

    echo "<br>Votre voiture";

    $voiture =new Voiture("Voiture1",1,1,1,55,"Diesel",1000,"Bleue",57,100,4,4,3,2);
    $voiture->Start();
    echo "<br>Ce véhicule à une vitesse de ".$voiture->getSpeed();
    $voiture->Accelerate(57,1);
    echo "<br>Ce véhicule à une vitesse de ".$voiture->getSpeed(); 
    echo "<br>";

    
    echo "<br>Votre moto";

    $moto =new Moto("Moto1",1,1,1,55,"Essence",250,"Noir",57,100,2,1,2,1);
    $moto->Start();
    echo "<br>Ce véhicule à une vitesse de ".$moto->getSpeed();
    $moto->Accelerate(57,1);
    echo "<br>Ce véhicule à une vitesse de ".$moto->getSpeed(); 
    echo "<br>";

    echo "<br>Votre voiture";

    $camion =new Camion("Camion1",1,1,1,55,"Essence",2000,"Blanc",57,100,2,1,2,1);
    $camion->Start();
    echo "<br>Ce véhicule à une vitesse de ".$camion->getSpeed();
    $camion->Accelerate(57,1);
    echo "<br>Ce véhicule à une vitesse de ".$camion->getSpeed(); 
    echo "<br>";
//PARTIE AIR !!!!!!!!!!!
    echo "<br>Votre Avion à réaction";

    $avionReaction =new AvionReaction("AvionR1",1,1,1,100,"Kérosène",3000,"Rouge",300,100,3,0,3,500,500,10);
    $avionReaction->Start();
    echo "<br>Ce véhicule à une vitesse de ".$avionReaction->getSpeed();
    $avionReaction->Accelerate(300,1);
    echo "<br>Ce véhicule à une vitesse de ".$avionReaction->getSpeed(); 
    echo "<br>";

    echo "<br>Votre Avion à hélice";

    $avionHelice =new AvionHelice("AvionH1",1,1,1,80,"Solaire",3000,"Rouge",250,100,3,0,3,500,500);
    $avionHelice->Start();
    echo "<br>Ce véhicule à une vitesse de ".$avionHelice->getSpeed();
    $avionHelice->Accelerate(250,1);
    echo "<br>Ce véhicule à une vitesse de ".$avionHelice->getSpeed(); 
    echo "<br>";

    echo "<br>Votre helico";

    $helico =new Helico("Hélico1",1,1,1,70,"Kérosène",3000,"Rouge",220,100,3,0,3,500,500,250);
    $helico->Start();
    echo "<br>Ce véhicule à une vitesse de ".$helico->getSpeed();
    $helico->Accelerate(250,1);
    echo "<br>Ce véhicule à une vitesse de ".$helico->getSpeed(); 
    echo "<br>";

    //partie Eau 
    echo "<br>Votre bateau a voile";

    $bateauVoile =new BateauVoile("BateauV1",2,2,2,80,"Vent",5000,"Blanc",300,100,500,500,10,2,2);
    $bateauVoile->Start();
    echo "<br>Ce véhicule à une vitesse de ".$bateauVoile->getSpeed();
    $bateauVoile->Accelerate(90,50);
    echo "<br>Ce véhicule à une vitesse de ".$bateauVoile->getSpeed(); 
    echo "<br>";

    echo "<br>Votre bateau a moteur";

    $bateauMoteur =new BateauMoteur("BateauM1",2,2,2,100,"Électrique",5000,"Bleue",300,100,500,500,10);
    $bateauMoteur->Start();
    echo "<br>Ce véhicule à une vitesse de ".$bateauMoteur->getSpeed();
    $bateauMoteur->Accelerate(250,150);
    echo "<br>Ce véhicule à une vitesse de ".$bateauMoteur->getSpeed(); 
    echo "<br>";

    echo "<br>Votre Sous-Marin";

    $sousMarin =new SousMarin("SousMarin1",3,3,3,90,"Kérosène",10000,"Noir",350,100,1000,1000,200,20,5,1000,2);
    $sousMarin->Start();
    echo "<br>Ce véhicule à une vitesse de ".$sousMarin->getSpeed();
    $sousMarin->Accelerate(350,300);
    echo "<br>Ce véhicule à une vitesse de ".$sousMarin->getSpeed(); 
    echo "<br>";
    
    
/* objectif = appeler voiture, augmenter vitesse voiture quand bouton on, afficher les infos de la voiture, 
    Òafficher vitesse voiture quand vitesse = 57 */
    echo "<br>Deuxième hélicoptère";
    $helico2 = new Helico("Hélico2",1,1,1,80,"Solaire",2400,"Gris",200,90,2,100,3,700,540,150);
    $helico2->Start();
    echo "<br>";
    echo "<br>L'Hélicoptère ".$helico2->getName()." à un % de santé de ".$helico2->getLife()."%.";
    $helico->Tirer($helico2);
    echo"<br>L'hélicoptère ".$helico->getName()." a tirer sur ".$helico2->getName().".";
    echo "<br>L'Hélicoptère ".$helico2->getName()." à désormais un % de santé de ".$helico2->getLife()."%."
?>
</body>
</html>