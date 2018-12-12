<?php

abstract class Vehicule
{
	protected $sizeX;			//
	protected $sizeY;			//Attributs de la taille longueur, hauteur et largeur du véhicule (en cm)
	protected $sizeZ;			//
	protected $speed;			//Vitesse indiquée en km/h
	protected $energyType;		//Type d'énergie utilisée par le véhicule (musculaire, électrique, solaire, vent, thermique)
	protected $weight;			//Poids en kg
	protected $isOn = false;	//Booleen d'activation du véhicule
	protected $color;			//Couleur du véhicule ("Bleue","Rouge","Jaune","Vert","Gris","Blanc","Noir","Orange","Violet")
	protected $orientation;		//Orientation du véhicule ("Nord","Est","Sud","Ouest")
	protected $maxSpeed;		//Vitesse max du véhicule(pour la vérification du setSpeed)
	protected $orientation;
	CONST $possibleOrientation = new array("Nord","Est","Sud","Ouest");

	public function __construct($sizeX,$sizeY,$sizeZ,$speed,$energyType,$weight,$color,$maxSpeed){	//Constructeur de la classe véhicule complet
		$this->sizeX = setSizeX($sizeX);
		$this->sizeY = setSizeY($sizeY);
		$this->sizeZ = setSize($sizeZ);
		$this->speed = setSpeed($speed);
		$this->energyType = setEnergy($energyType);
		$this->weight = setWeight($weight);
		$this->color = setColor($color);
		$this->maxSpeed = $maxSpeed;
	}

	public function getSize(){						//Ce getter récupère les 3 attributs de taille sous forme de tableau, le echo sert de test
		$tabSize = new array($sizeX,$sizeY,$sizeZ)
		echo "Ce véhicule fait ".$this->sizeX."cm de long, ".$this->sizeY."cm de haut, ".$this->sizeZ."cm de profondeur.";
		return $tabSize
	}
	public function getSpeed(){						//Getter de la vitesse, l'echo sert de test
		echo "Ce véhicule va à ".$this->speed." km/h"; 
		return $this->speed;
	}
	public function getEnergy(){
		echo "Ce véhicule fonctionne à l'énergie ".$this->energyType;
		return $this->energyType;
	}
	public function getWeight(){					//Getter du poids du véhicule
		echo "Ce véhicule pèse ".$this->weight." kg";
		return $this->weight;
	}
	public function getColor(){	
		echo "Ce véhicule est de couleur ".$this->color.".";
		return $this->color;
	}
	public function getOn(){						//Getter de l'état du véhicule (allumé ou non)
		return $this->isOn;
	}
	public function setSizeX($size){				//Permet de fixer la longueur du véhicule (30m max, taille de la plus grande limousine du monde)
		if($size > 3000){
			echo "La limousine la plus grande du monde est plus petite que ça, arrete tes bétises !";
		}else{
			$this->sizeX = $size;
		}
	}
	public function setSizeY($size){				//Permet de fixer la hauteur du véhicule (entre 50cm et 2m50 max)
		if($size > 250){
			echo "On aime pas trop les monster Trucks ici";
			return -1;
		}else if($size <= 50){
			echo "Un véhicule de moins de 50cm ? ça parait compliqué..."
			return -1;
		}else{
			$this->sizeY = $size;
		}
	}
	public function setSizeZ($size){				//Permet de fixer la largeur du véhicule (2m50 max)
		if($size > 250){
			echo "On aime pas trop les monster Trucks ici";
		}else if($size <= 0){
			echo "Une taille négative, j'arrive pas a voir le concept";
			return -1;
		}else{
			$this->sizeZ = $size;
		}
	}
	public function setSpeed($speed){			//Permet de fixer la vitesse entre 0 et la vitesse max en km/h
		if($vitesse < 0){
			echo "Tu essaye de mettre une vitesse négative ? Bravo !";
			return -1;
		}elseif ($vitesse > $this->maxSpeed) {
			echo "La vitesse entrée dépasse la vitesse autorisée";
			return -1;
		}else $this->speed = $speed;
	}
	public function setEnergy($energyType){			//Permet de fixer le type d'énergie utilisé par le véhicule
		if(!in_array($energyType,["musculaire","électrique","solaire","vent","thermique"])){
			echo "type d'énergie invalide";
		}else{
			$this->energyType = $energyType;
			echo "Le véhicule fonctionne désormais à l'énergie ".$energyType;
		}
	}
	public function setWeight($weight){				//Permet de fixer le poids
		if($weight <= 0){
			echo "tu essaye vraiment de définir un poids négatif ? VRAIMENT ?";
			return -1;
		}else{
			$this->weight = $weight;
		}
	}
	public function setColor($color){				//Permet de set la couleur du véhicule
		if(!in_array($color, ["Bleue","Rouge","Jaune","Vert","Gris","Blanc","Noir","Orange","Violet"])){
			echo "couleur invalide";
			return -1;
		}else{
			$this->color = $color;
		}
	}
	public function Start(){						//Allume le moteur du véhicule (ou ouvre les voiles dans le cas du bateau à voile)
		if($isOn == true){
			echo "Ce véhicule est déjà allumé";
			return -1;
		}
		$this->isOn = true;
		echo "Ce véhicule est allumé";
	}
	public function Stop(){							//Eteint le moteur du véhicule (ou ferme les voiles dans le cas du bateau à voile)
		if($isOn == false){
			echo "Ce véhicule est déjà arreté";
			return -1;
		}
		$this->isOn = false;
		echo "Ce véhicule est arreté";
	}
	public function Accelerate($maxSpeed, $accel){	//Permet d'augmenter la vitesse d'un nombre en argument(en la limitant au max défini en argument également)
		if($this->speed >= $maxSpeed - $accel){
			echo "Vous avez atteint la vitesse maximale";
			$this->speed = $maxSpeed;
			return;
		}
		$this->speed += $accel;
	}
	public function Deccelerate($deccel){			//Permet de diminuer la vitesse d'un véhicule par un nombre passé en argument (sans atteindre une vitesse négative)
		if($this->speed <=$deccel){
			echo "Vous êtes à l'arret";
			$this->speed = 0;
			return;
		}
		$this->speed -= $deccel;
	}
	public function getMaxSpeed(){					//récupère la valeur de la vitesse maximum du véhicule
		return $this->maxSpeed;
	}
	public function turnLeft(){						//permet de tourner a gauche de 90° (on considère que le véhicule peut aller dans 4 directions differentes, vers les 4 points cardinaux)
		$this->orientation -= 1;
		if($this->orientation < 0){
			$this->orientation = 3;
		}
	}
	public function turnRight(){					//permet de tourner a droite de 90° (on considère que le véhicule peut aller dans 4 directions differentes, vers les 4 points cardinaux)
		$this->orientation += 1;
		if($this->orientation > 3){
			$this->orientation = 0;
		}
	}
}