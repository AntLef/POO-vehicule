<?php

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