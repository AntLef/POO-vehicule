<?php

abstract class Terre extends Vehicule{

	protected $wheel = 2; /** roue */
	protected $window; /** pare brise */
	protected $rearview_mirror; /** rétroviseur */
	protected $shock_absorber; /** amortisseur  */

/** Attribut */

	public function __construct($wheel,$window,$rearview_mirror) {
		parent::__construct()
		$this->wheel = setWheel($wheel);
		$this->windows = setWheel($wheel);
		$this->rearview_mirror = setRearview_mirror($rearview_mirror);
	}


	public function getWheel() {
		echo "Ce véhicule terrestre à ".$wheel." roues.";
	}

	public function setWheel($wheel) { /* si ton véhicule à moins de deux roues */
		if ($wheel < 2){
			$wheel = 2;
		} else {
			return $this->$wheel;
		}
	}
	
	public function getWindow() {
		echo "Ce véhicule terrestre à ".$window." vitre.";
		return $this->windows;
	}

	public function setWindow($window) {
		if($windows = 1){
			return 1;
		} else if ($window > 1) {
			echo "Ce véhicule terrestre à ".$window." vitres.";
		} else 
		echo "Ce véhicule terrestre n'à plus de vitre.";
		return +1;
		echo "Ce véhicule à de nouveaux une vitre";
	}

	public function getRearview_mirror() {
		echo "Ce véhicule terrestre à ".$rearview_mirror." rétroviseurs.";
		return $this->rearview_mirror;
	}
	
	public function setRearview_mirror($rearview_mirror) {
		if ($rearview_mirror < 2){
			$rearview_mirror + 1;
		} else {
			return $this->$rearview_mirror;
		}
	}

	/** Méthode */

	public function drift() {
		echo "Ce véhicule est en train de drifter.";
	}

}

?>