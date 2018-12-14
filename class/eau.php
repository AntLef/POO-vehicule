<?php

require_once("vehicule.php");

abstract class Eau extends Vehicule{


	protected $sonar;
	protected $radio;

	public function __construct($name,$sizeX,$sizeY,$sizeZ,$speed,$energyType,$weight,$color,$maxSpeed,$life,$sonar,$radio){
		parent::__construct($name,$sizeX,$sizeY,$sizeZ,$speed,$energyType,$weight,$color,$maxSpeed,$life);
		$this->setSonar($sonar);
		$this->setRadio($radio);
	}

	public function getSonar(){
 	   return $this->sonar;
	}
	public function setSonar($son){
	    $this->sonar = $son;
	}

	public function getRadio(){
	    return $this->radio; 
	}
	public function setRadio($rad){
    	$this->radio = $rad;
	}

}