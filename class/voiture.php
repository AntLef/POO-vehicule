<?php

class Voiture extends Terre{
	protected $passager = 1;

/** Attribut */

	public function __construct($wheel,$passager) {
		parent::__construct();
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
//SizeX,Y,Z,speed,typeEnergie,poids,couleur,vitesseMax, nbRoues, nbVFenetres,nbRetro,nbPassager