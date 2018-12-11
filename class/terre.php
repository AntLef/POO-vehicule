<?php

abstract class Terre extends Vehicule{

	protected $whell = 2; /** roue */
	protected $window; /** pare brise */
	protected $rearview_mirror; /** rétroviseur */
	protected $shock_absorber; /** amortisseur  */
	protected $bodywork; /** carrosserie */
	protected $drift;


	public function __construct($whell,$window,$rearview_mirror,$shock_absorber,$bodywork,$drift) {
		$this->whell = $whell;
		$this->windows = $window;
		$this->rearview_mirror = $rearview_mirror;
		$this->shock_absorber = $shock_absorber;
		$this->bodywork = $bodywork;
		$this->drift = $drift;
	}


	public function getWhell() {
		echo "Ce véhicule terrestre à ".$whell." roues.";
	}

	public function SetWhell() {
		if ($whell < 2){
			$well + 1;
		} else {
			return $this->$whell;
		}
	}
	
	public function getWindow() {
		echo "Ce véhicule terrestre à ".$window." vitre.";
		return $this->windows;
	}

	public function setWindow() {
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
	
	public function setRearview_mirror() {
		if ($rearview_mirror < 2){
			$rearview_mirror + 1;
		} else {
			return $this->$whell;
		}
	}

	public function getShock_absorber() {
		echo "Ce véhicule à ".$shock_absorber." ammortisseur.";
		return $this->shock_absorber;
	}
	
	public function setShock_absorber() {
	
	}
	
	public function getBodywork() {
		echo "Ce véhicule à ".$bodywork." une c.";
		return $this->bodywork;
	}
	
	public function setBodywork() {
	
	}
	
	public function getDrift() {
		echo "Ce véhicule terrestre à ".$drift." roues.";
		return $this->drift;
	}
	
	public function setDrift() {
	
	}

}



































class Voiture extends Terre{

	protected $whell = 2;


	public function __construct($whell){
		$this->getWhell($whell);
	}

	public function getWhell(){
		echo "Ce véhicule terrestre à ".$whell.".";
	}

}

?>