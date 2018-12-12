<?php 
require (air.php);

	abstract class Avion extends Air
{
	protected $ailes = "milieu";

	//constructeur
	public function __construct($ailes){ 
	$this->ailes = $ailes;
	}
	//fonction vol ayant été crée plus tot, si la vitesse n'est pas suffisante ou bien si l'hélice ne tourne pas, l'avion ne décolle pas
	public function vol (){
		if ($isOn == true && $speed > 50 && $helice == true) {
			echo "Vous prenez de l'altitude";
			$altitude++;
		}
		else {
			echo "Pas assez d'allure";
			return;
		}
	}

	//3 méthodes, tourner a gauche, tourner a droite ou se redresser
	public function tournerGauche (){
	$ailes = "gauche";
	echo "<br>Vous tournez à gauche."
	}
		
	public function tournerDroite (){
		$ailes = "droite";
		echo "<br>Vous tournez à droite."

	}
	public function Redresser(){
		$ailes = "milieu";
		echo "<br>Vous vous redressez."
	}

}



?>