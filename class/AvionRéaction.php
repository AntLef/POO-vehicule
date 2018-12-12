<?php 
require (avion.php);

	class AvionReaction extends Avion 
{
	protected $missiles;

	public function __construct($missiles){ 
	$this->missiles = $missiles;
	}

	public function tirerMissiles(){
		if ($missiles > 0) {
			$missiles --;
			//penser à ajouter une interraction de dégats
		}
	}
}



?>