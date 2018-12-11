<?php

class Moto extends Terre{

	protected $wheel = 4;
	protected $passager = 1;

/** Attribut */

	public function __construct($wheel, $passager) {
		$this->wheel = $wheel;
		$this->passager = $passager;
	}


	public function getwheel() {
		echo "Ce véhicule terrestre à ".$wheel." roues.";
	}

	public function Setwheel($wheel) { /** si ton véhicule à moins de deux roues */
		if ($wheel < 2 && $wheel > 3){
			$wheel + 1;
		} else {
			return $this->$wheel;
		}
	}

	public function getpassager(){
		return $this->passager;
	}
	public function setPassager($passager){
		if($passager > 2){
			echo "Il n'y a plus de place dans le vehicule";
		} else {
			echo "Il y a de place dans le vehicule";
		} 
	}

/** Méthode */

}

?>