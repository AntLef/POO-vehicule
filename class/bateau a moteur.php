<?php

require_once("bateau.php");
class bateauamoteur extends bateau{
    public function __construct($sizeX,$sizeY,$sizeZ,$speed,$energyType,$weight,$color,$maxSpeed,$sonar,$radio,$nbgiletdesauvetage){
		parent::__construct($sizeX,$sizeY,$sizeZ,$speed,$energyType,$weight,$color,$maxSpeed,$sonar,$radio,$nbgiletdesauvetage);
		
	}

}