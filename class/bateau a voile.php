<?php

require_once("bateau.php");

class BateauVoile extends Bateau{

    protected $nbvoile;
    protected $nbmat;

    public function __construct($name,$sizeX,$sizeY,$sizeZ,$speed,$energyType,$weight,$color,$maxSpeed,$life,$sonar,$radio,$nbgiletdesauvetage,$nbmat,$nbvoile){
		parent::__construct($name,$sizeX,$sizeY,$sizeZ,$speed,$energyType,$weight,$color,$maxSpeed,$life,$sonar,$radio,$nbgiletdesauvetage);
		$this->setNbMat($nbmat);
		$this->setNbVoile($nbvoile);
	}
    public function getNbVoile(){
 	   return $this->nbvoile;
	}
	public function setNbVoile($nbvoile){
	    $this->nbvoile = $nbvoile;
    }
    
    public function getNbMat(){
 	   return $this->nbmat;
	}
	public function setNbMat($nbmat){
	    $this->nbmat = $nbmat;
	}
}