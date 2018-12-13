<?php 
require_once("air.php");

	class Helico extends Air 
{

	protected $vitesseHelice;
	protected $mitraillette;
	protected $munition;
	protected $stockMunition = 200;

	public function __construct($sizeX,$sizeY,$sizeZ,$speed,$energyType,$weight,$color,$maxSpeed,$helice,$altitude,$roues,$radar,$radio,$mitraillette){ 
		parent::__construct($sizeX,$sizeY,$sizeZ,$speed,$energyType,$weight,$color,$maxSpeed,$helice,$altitude,$roues,$radar,$radio);
		$this->setMitraillette($mitraillette);
	}

	//méthode pour voler et prendre de l'altitude
	public function vol(){
		if ($this->vitesseHelice > 50) {
			echo "<br>l'hélico s'élève.";
			$this->altitude ++;
		}
	}
	//méthode pour tirer et recharger
	public function Tirer(){
		if ($this->munition > 0){
			$this->munition --;

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
	public function getMitraillette(){
		return $this->mitraillette;
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
	public function setMitraillette($mitraillette){
		$this->mitraillete = $mitraillette;
	}
	public function setMunition($munition){
		$this->munition = $munition;
	}
	public function setStockMunition($stockMunition){
		$this->stockMunition = $stockMunition;
	}
}

?>