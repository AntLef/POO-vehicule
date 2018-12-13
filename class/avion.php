<?php 
require_once("air.php");

	abstract class Avion extends Air
{
	//constructeur
	public function __construct($sizeX,$sizeY,$sizeZ,$speed,$energyType,$weight,$color,$maxSpeed,$helice,$altitude,$roues,$radar,$radio){ 
		parent::__construct($sizeX,$sizeY,$sizeZ,$speed,$energyType,$weight,$color,$maxSpeed,$helice,$altitude,$roues,$radar,$radio);
	}
	//fonction vol ayant été crée plus tot, si la vitesse n'est pas suffisante ou bien si l'hélice ne tourne pas, l'avion ne décolle pas
	public function vol (){
		if ($isOn == true && $speed > 50 && $helice == true) {
			echo "Vous prenez de l'altitude";
			$altitude++;
		}
		else{
			echo "Pas assez d'allure";
			return;
		}
	}

}



?>