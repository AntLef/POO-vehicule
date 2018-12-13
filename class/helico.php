<?php 
require_once("air.php");

	class Helico extends Air 
{

	protected $vitesseHelice;
	protected $munition;
	protected $stockMunition = 200;

	public function __construct($sizeX,$sizeY,$sizeZ,$speed,$energyType,$weight,$color,$maxSpeed,$life,$helice,$altitude,$roues,$radar,$radio,$munition){ 
		parent::__construct($sizeX,$sizeY,$sizeZ,$speed,$energyType,$weight,$color,$maxSpeed,$life,$helice,$altitude,$roues,$radar,$radio);
		$this->setMunition($munition);
	}

	//méthode pour voler et prendre de l'altitude
	public function vol(){
		if ($this->vitesseHelice > 50) {
			echo "<br>l'hélico s'élève.";
			$this->altitude ++;
		}
	}
	//méthode pour tirer et recharger
	public function Tirer(Helico $cible){
		if ($this->munition > 0){
			$this->munition --;
			$cible->life -=10;
			if($cible<=0){
				echo "<br>Cible détruite.";
				$cible->life = 0;
			}else{
				echo "<br>La cible à été endommagée.";
			}

		}else{
			echo "<br>Plus de munitions !";
		}
	}
	public function Recharger(){
	if ($this->stockMunition >= 50) {		
		$this->stockMunition - 50;
		$this->munition + 50;
		}
	else {
		echo "<br>Plus de balles ¯\_(ツ)_/¯.";
		}

	}
	public function getVitesseHelice(){
		return $this->vitesseHelice;
	}
	public function getMunition(){
		return $this->munition;
	}
	public function getStockMunition(){
		return $this->stockMunition;
	}
	public function setVitesseHelice($vitesseHelice){
		$this->vitesseHelice = $vitesseHelice;
	}
	public function setMunition($munition){
		$this->munition = $munition;
	}
	public function setStockMunition($stockMunition){
		$this->stockMunition = $stockMunition;
	}
}

?>