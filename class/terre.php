<?php

require_once("vehicule.php");

abstract class Terre extends Vehicule{

	protected $wheel = 2; /** roue */
	protected $window; /** pare brise */
	protected $rearview_mirror; /** rétroviseur */
	protected $shock_absorber; /** amortisseur  */

/** Attribut */

	public function __construct($sizeX,$sizeY,$sizeZ,$speed,$energyType,$weight,$color,$maxSpeed,$life,$wheel,$window,$rearview_mirror) {
		parent::__construct($sizeX,$sizeY,$sizeZ,$speed,$energyType,$weight,$color,$maxSpeed,$life);
		$this->wheel = $this->setWheel($wheel);
		$this->windows = $this->setWheel($wheel);
		$this->rearview_mirror = $this->setRearview_mirror($rearview_mirror);
	}


	public function getWheel() {
		echo "<br>Ce véhicule terrestre à ".$this->wheel." roues.";
	}

	public function setWheel($wheel) { /* si ton véhicule à moins de deux roues */
		if ($wheel < 2){
			$wheel = 2;
		} else {
			$this->wheel =$wheel;
		}
	}
	
	public function getWindow() {
		echo "<br>Ce véhicule terrestre à ".$window." vitre.";
		return $this->windows;
	}

	public function setWindow($window) {
		if($windows = 1){
			return 1;
		} else if ($window > 1) {
			echo "<br>Ce véhicule terrestre à ".$window." vitres.";
		} else 
		echo "<br>Ce véhicule terrestre n'à plus de vitre.";
		return +1;
		echo "<br>Ce véhicule à de nouveaux une vitre.";
	}

	public function getRearview_mirror() {
		echo "<br>Ce véhicule terrestre à ".$rearview_mirror." rétroviseurs.";
		return $this->rearview_mirror;
	}
	
	public function setRearview_mirror($rearview_mirror) {
		if ($rearview_mirror < 2){
			$rearview_mirror + 1;
		} else {
			$this->rearview_mirror = $rearview_mirror;
		}
	}

	/** Méthode */



}

?>