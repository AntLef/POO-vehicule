<?php

require_once("terre.php");
require_once("vehicule.php");

class Voiture extends Terre{
	protected $passager = 1;

/* Attribut */

	public function __construct($sizeX,$sizeY,$sizeZ,$speed,$energyType,$weight,$color,$maxSpeed,$life,$wheel,$window,$rearview_mirror,$passager) {
		parent::__construct($sizeX,$sizeY,$sizeZ,$speed,$energyType,$weight,$color,$maxSpeed,$life,$wheel,$window,$rearview_mirror);
		$this->passager = $this->setPassager($passager);
	}
	public function getPassager(){
		return $this->passager;
	}
	public function setPassager($passager){
		if($passager > 5){
			echo "<br>Il n'y a plus de place dans le vehicule.";
			return -1;
		} else {
			echo "<br>Il y a de place dans le vehicule.";
			$this->passager = $passager;
		} 
	}
/** Méthode */
}
//SizeX,Y,Z,speed,typeEnergie,poids,couleur,vitesseMax, nbRoues, nbFenetres,nbRetro,nbPassager