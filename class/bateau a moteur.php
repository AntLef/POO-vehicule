<?php

require_once("bateau.php");

class BateauMoteur extends Bateau{
    public function __construct($name,$sizeX,$sizeY,$sizeZ,$speed,$energyType,$weight,$color,$maxSpeed,$life,$sonar,$radio,$nbgiletdesauvetage){
		parent::__construct($name,$sizeX,$sizeY,$sizeZ,$speed,$energyType,$weight,$color,$maxSpeed,$life,$sonar,$radio,$nbgiletdesauvetage);
		
	}

}