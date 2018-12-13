<?php 
require_once("avion.php");

	class AvionHelice extends Avion
{
	public function __construct($sizeX,$sizeY,$sizeZ,$speed,$energyType,$weight,$color,$maxSpeed,$life,$helice,$altitude,$roues,$radar,$radio){
		parent::__construct($sizeX,$sizeY,$sizeZ,$speed,$energyType,$weight,$color,$maxSpeed,$life,$helice,$altitude,$roues,$radar,$radio);
	}
}


?>