<?php

require("./terre.php");
require("./vehicule.php");

class Voiture extends Terre{
	protected $passager = 1;

/* Attribut */

	public function __construct($sizeX,$sizeY,$sizeZ,$speed,$energyType,$weight,$color,$maxSpeed,$wheel,$window,$rearview_mirror,$passager) {
		parent::__construct($sizeX,$sizeY,$sizeZ,$speed,$energyType,$weight,$color,$maxSpeed,$wheel,$window,$rearview_mirror);
		$this->passager = setPassager($passager);
	}
	public function getPassager(){
		return $this->passager;
	}
	public function setPassager($passager){
		if($passager > 5){
			echo "Il n'y a plus de place dans le vehicule";
			return -1;
		} else {
			echo "Il y a de place dans le vehicule";
			$this->passager = $passager;
		} 
	}
/** Méthode */
}
//SizeX,Y,Z,speed,typeEnergie,poids,couleur,vitesseMax, nbRoues, nbFenetres,nbRetro,nbPassager