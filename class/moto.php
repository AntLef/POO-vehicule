<?php

class Moto extends Terre{

	protected $wheel = 4;

/** Attribut */

	public function __construct($wheel){
		$this->getwheel($wheel);
	}

	public function getwheel(){
		echo "Ce véhicule terrestre à ".$wheel.".";
	}

/** Méthode */

}

?>