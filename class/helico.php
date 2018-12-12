<?php 
require (air.php);

	class Helico extends Air 
{

	protected $vitesseHelice;
	protected $mitraillette;
	protected $munition;
	protected $inclinaison;
	protected $stockMunition = 200;

	public function __construct($Mitraillette){ 
	$this->mitraillette = $Mitraillette;
	}

	//méthode pour voler et prendre de l'altitude
	public function vol(){
		if (vitesseHelice > 50) {
			echo "<br>l'hélico s'élève.";
			$altitude ++;
		}
	}
	//3 méthodes, tourner a gauche, tourner a droite ou se redresser
	public function tournerGauche (){
	$inclinaison = "gauche" ;
	echo "<br>Vous tournez à gauche.";
	}
		
	public function tournerDroite (){
		$inclinaison = "droite";
		echo "<br>Vous tournez à droite.";

	}
	public function Redresser(){
		$inclinaison = "milieu";
		echo "<br>Vous vous redressez.";
	}

	//méthode pour tirer et recharger
	public function Tirer(){
		if ($munition > 0){
			$munition --;

		}
	}
	public function Recharger(){
	if (stockMunition >= 50) {		
		$stockMunition - 50;
		$munition + 50;
		}
	else {
		echo "<br>Plus de balles ¯\_(ツ)_/¯.";
		}

	}

}

?>