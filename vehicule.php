<?php

abstract class Vehicule
{
	protected $sizeX;
	protected $sizeY;
	protected $sizeZ;
	protected $speed;
	protected $energyType;
	protected $weight;
	protected $isOn = false;
	protected $color;

	public function __construct($sizeX,$sizeY,$sizeZ,$speed,$energyType,$weight,$color){
		$this->sizeX = $sizeX;
		$this->sizeY = $sizeY;
		$this->sizeZ = $sizeZ;
		$this->speed = $speed;
		$this->energyType = $energyType;
		$this->weight = $weight;
		$this->color = $color;

	}

	public function getSize(){
		echo "Ce véhicule fait ".$this->sizeX."cm de long, ".$this->sizeY."cm de haut, ".$this->sizeZ."cm de profondeur.";
	}
	public function getSpeed(){
		echo "Ce véhicule va à ".$this->speed." km/h";
		return $this->speed;
	}
	public function getEnergy(){
		echo "Ce véhicule fonctionne à l'énergie ".$this->energyType;
		return $this->energyType;
	}
	public function getWeight(){
		echo "Ce véhicule pèse ".$this->weight." kg";
		return $this->weight;
	}
	public function getColor(){
		echo "Ce véhicule est de couleur ".$this->color.".";
		return $this->color;
	}
	public function getOn(){
		return $this->isOn;
	}
	public function setSizeX(int $size){
		if($size > 3000){
			echo "La limousine la plus grande du monde est plus petite que ça, arrete tes bétises !";
		}else{
			$this->sizeX = $size;
		}
	}
	public function setSizeY(int $size){
		if($size > 200){
			echo "On aime pas trop les monster Trucks ici";
		}else{
			$this->sizeY = $size;
		}
	}
	public function setSizeZ(int $size){
		if($size > 200){
			echo "On aime pas trop les monster Trucks ici";
		}else{
			$this->sizeZ = $size;
		}
	}
	public function setSpeed(int $speed){
		if($vitesse < 0){
			echo "Tu essaye de mettre une vitesse négative ? Bravo !";
			return -1;
		}elseif ($vitesse > 200) {
			echo "On est pas sur l'autobanh allemande, pauvre fou !";
			return -1;
		}else $this->speed = $speed;
	}
	public function setEnergy($energyType){
		if(!in_array($energyType,["musculaire","électrique","solaire","vent","thermique"])){
			echo "type d'énergie invalide";
		}else{
			$this->energyType = $energyType;
			echo "Le véhicule fonctionne désormais à l'énergie ".$energyType;
		}
	}
	public function setWeight($weight){
		if($weight <= 0){
			echo "tu essaye vraiment de définir un poids négatif ? VRAIMENT ?";
			return -1;
		}else{
			$this->weight = $weight;
		}
	}
	public function setColor($color){
		if(!in_array($color, ["Bleue","Rouge","Jaune","Vert","Gris","Blanc","Noir","Orange","Violet"])){
			echo "couleur invalide";
			return -1;
		}else{
			$this->color = $color;
		}
	}

	public function Start(){
		if($isOn == true){
			echo "Ce véhicule est déjà allumé";
			return -1;
		}
		$this->isOn = true;
		echo "Ce véhicule est allumé";
	}
	public function Stop(){
		if($isOn == false){
			echo "Ce véhicule est déjà arreté";
			return -1;
		}
		$this->isOn = false;
		echo "Ce véhicule est arreté";
	}
	public function Accelerate(){
		if($this->speed >= 100){
			echo "Vous avez atteint la vitesse maximale";
			return;
		}
		$this->speed += 10;
	}
	public function Deccelerate(){
		if($this->speed <=10){
			echo "Vous êtes à l'arret";
			$this->speed = 0;
			return;
		}
		$this->speed -= 10;
	}

}
