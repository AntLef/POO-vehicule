<?php 
require_once("avion.php");

	class AvionReaction extends Avion 
{
	protected $missiles;

	public function __construct($sizeX,$sizeY,$sizeZ,$speed,$energyType,$weight,$color,$maxSpeed,$helice,$altitude,$roues,$radar,$radio,$missiles){ 
	parent::__construct($sizeX,$sizeY,$sizeZ,$speed,$energyType,$weight,$color,$maxSpeed,$helice,$altitude,$roues,$radar,$radio,$missiles);
	$this->setMissiles($missiles);
	}

	public function tirerMissiles(){
		if ($missiles > 0) {
			$missiles --;
			//penser à ajouter une interraction de dégats
		}
	}
	public function getMissiles(){
		return $this->missiles;
	}
	public function setMissiles($missiles){
		$this->missiles = $missiles;
	}
}



?>