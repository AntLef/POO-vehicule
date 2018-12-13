<?php

class Camion extends Terre{

	protected $passager = 1;

/** Attribut */

	public function __construct($sizeX,$sizeY,$sizeZ,$speed,$energyType,$weight,$color,$maxSpeed,$wheel,$window,$rearview_mirror,$passager) {
		parent::__construct($sizeX,$sizeY,$sizeZ,$speed,$energyType,$weight,$color,$maxSpeed,$wheel,$window,$rearview_mirror);
		$this->setPassager($passager);
	}

	public function getpassager(){
		return $this->passager;
	}
	public function setPassager($passager){
		if($passager > 4){
			echo "<br>Il n'y a plus de place dans le vehicule.";
		} else {
			echo "<br>Il y a de place dans le vehicule.";
			$this->passager = $passager;
		} 
	}

/** Méthode */

}

?>