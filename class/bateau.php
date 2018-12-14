<?php
require_once("eau.php");
abstract class Bateau extends Eau {

    protected $nbgiletdesauvetage;

    public function __construct($name,$sizeX,$sizeY,$sizeZ,$speed,$energyType,$weight,$color,$maxSpeed,$life,$sonar,$radio,$nbgiletdesauvetage){
		parent::__construct($name,$sizeX,$sizeY,$sizeZ,$speed,$energyType,$weight,$color,$maxSpeed,$life,$sonar,$radio);
		$this->setNbGiletDeSauvetage($nbgiletdesauvetage);
    }
    public function getNbGiletDeSauvetage(){
 	   return $this->nbgiletdesauvetage;
	}
	public function setNbGiletDeSauvetage($nbgiletdesauvetage){
	    $this->nbgiletdesauvetage = $nbgiletdesauvetage;
	}
}