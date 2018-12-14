<?php

abstract class Vehicule
{
	protected $name;
	protected $sizeX;			//
	protected $sizeY;			//Attributs de la taille longueur, hauteur et largeur du véhicule (en cm)
	protected $sizeZ;			//
	protected $speed;			//Vitesse indiquée en km/h
	protected $energyType;		//Type d'énergie utilisée par le véhicule (musculaire, électrique, solaire, vent, thermique)
	const POSSIBLE_ENERGY = array("Électrique","Solaire","Vent","Essence","Diesel","Kérosène");
	protected $weight;			//Poids en kg
	protected $isOn = false;	//Booleen d'activation du véhicule
	protected $color;			//Couleur du véhicule ("Bleue","Rouge","Jaune","Vert","Gris","Blanc","Noir","Orange","Violet")
	const POSSIBLE_COLOR = array("Bleue","Rouge","Jaune","Vert","Gris","Blanc","Noir","Orange","Violet");
	protected $maxSpeed;		//Vitesse max du véhicule(pour la vérification du setSpeed)
	protected $orientation = 0;	//Sert d'index au tableau constant possibleOrientation
	const POSSIBLE_ORIENTATION = array("Nord","Est","Sud","Ouest");
	protected $life = 100;

	public function __construct($name,$sizeX,$sizeY,$sizeZ,$speed,$energyType,$weight,$color,$maxSpeed,$life){	//Constructeur de la classe véhicule complet
		$this->setName($name);
		$this->setSizeX($sizeX);
		$this->setSizeY($sizeY);
		$this->setSizeZ($sizeZ);
		$this->setSpeed($speed);
		$this->setEnergy($energyType);
		$this->setWeight($weight);
		$this->setColor($color);
		$this->setMaxSpeed($maxSpeed);
		$this->setLife($life);
	}

	public function setName($name){
		$this->name = $name;
	}
	public function getName(){
		return $this->name;
	}
	public function getSize(){						//Ce getter récupère les 3 attributs de taille sous forme de tableau
		$tabSize = array($sizeX,$sizeY,$sizeZ);
		return $tabSize;
	}
	public function getSpeed(){						//Getter de la vitesse
		return $this->speed;
	}
	public function getEnergy(){
		return $this->energyType;
	}
	public function getWeight(){					//Getter du poids du véhicule
		return $this->weight;
	}
	public function getColor(){	
		return $this->color;
	}
	public function getOn(){						//Getter de l'état du véhicule (allumé ou non)
		return $this->isOn;
	}
	public function setSizeX($size){				//Permet de fixer la longueur du véhicule
		if($size <=0){
			echo "<br>Une taille négative, c'est compliqué à fabriquer.";
			return;
		}else{
			$this->sizeX = $size;
		}
	}
	public function setSizeY($size){				//Permet de fixer la hauteur du véhicule (entre 50cm et 2m50 max)
		if($size <= 0){
			echo "<br>Un véhicule de moins de 0cm ? ça parait compliqué...";
			return;
		}else{
			$this->sizeY = $size;
		}
	}
	public function setSizeZ($size){				//Permet de fixer la largeur du véhicule (2m50 max)
		if($size <= 0){
			echo "<br>Une taille négative, j'arrive pas a voir le concept.";
			return;
		}else{
			$this->sizeZ = $size;
		}
	}
	public function setSpeed($speed){			//Permet de fixer la vitesse entre 0 et la vitesse max en km/h
		if($speed < 0){
			echo "<br>Tu essaye de mettre une vitesse négative ? Bravo !";
			return;
		}else {
			$this->speed = $speed;
			echo"<br>Ce véhicule a désormais une vitesse de ".$this->speed.".";
		}
	}
	public function setEnergy($energyType){			//Permet de fixer le type d'énergie utilisé par le véhicule
		if(!in_array($energyType,self::POSSIBLE_ENERGY)){
			echo "<br>Type d'énergie invalide.";
		}else{
			$this->energyType = $energyType;
			echo "<br>Le véhicule fonctionne désormais à l'énergie ".$energyType.".";
		}
	}
	public function setWeight($weight){				//Permet de fixer le poids
		if($weight <= 0){
			echo "<br>Tu essaye vraiment de définir un poids négatif ? VRAIMENT ?";
			return;
		}else{
			$this->weight = $weight;
		}
	}
	public function setColor($color){				//Permet de set la couleur du véhicule
		if(!in_array($color, self::POSSIBLE_COLOR)){
			echo "<br>Couleur invalide.";
			return -1;
		}else{
			$this->color = $color;
		}
	}
	public function Start(){						//Allume le moteur du véhicule (ou ouvre les voiles dans le cas du bateau à voile)
		if($this->isOn == true){
			echo "<br>Ce véhicule est déjà allumé.";
			return;
		}
		$this->isOn = true;
		echo "<br>Ce véhicule démarre.";
	}
	public function Stop(){							//Eteint le moteur du véhicule (ou ferme les voiles dans le cas du bateau à voile)
		if($this->isOn == false){
			echo "<br>Ce véhicule est déjà arreté.";
			return;
		}
		$this->isOn = false;
		echo "<br>Ce véhicule est arreté.";
	}
	//Question sur l'abstraction de la classe et l'emplacement de la définition
	public function Accelerate($maxSpeed, $accel){	//Permet d'augmenter la vitesse d'un nombre en argument(en la limitant au max défini en argument également)
		if($this->isOn == true){
			if($this->speed >= $maxSpeed - $accel){
				echo "<br>Vous avez atteint la vitesse maximale.";
				$this->speed = $maxSpeed;
				return;
			}
			$this->speed += $accel;
		}else{
			echo "<br>Ce véhicule n'est pas allumé.";
		}
	}
	public function Deccelerate($deccel){			//Permet de diminuer la vitesse d'un véhicule par un nombre passé en argument (sans atteindre une vitesse négative)
		if($this->speed <=$deccel){
			echo "<br>Vous êtes à l'arret.";
			$this->speed = 0;
			return;
		}
		$this->speed -= $deccel;
	}
	public function getMaxSpeed(){					//récupère la valeur de la vitesse maximum du véhicule
		return $this->maxSpeed;
	}
	public function setMaxSpeed($maxSpeed){
		$this->maxSpeed = $maxSpeed;
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
	public function getOrientation(){				//Retourne la chaine de caractère correspondante à la direction du véhicule
		return $this->possibleOrientation[$orientation];
	}
	public function setOrientation($orientation){	//Prend une chaine de caractère en entrée, et inscrit l'index correspondant dans l'attribut de l'objet pour trouver dans le tableau constant
		switch ($orientation) {
			case 'Nord':
				$this->orientation = 0;
			break;

			case 'Est':
				$this->orientation = 1;
			break;

			case 'Sud':
				$this->orientation = 2;
			break;

			case 'Ouest':
				$this->orientation = 3;
			break;

			default:
				echo "<br>Erreur, la valeur doit être un point cardinal comme : 'Nord'.";
			break;
		}
	}
	public function setLife($life){					//Permet de fixer l'état physique du véhicule
		if($life > 100 || $life < 0){
			echo "<br>Le pourcentage d'état du véhicule doit être compris entre 0% et 100%.";
			return;
		}else{
			$this->life = $life;
		}
	}
	public function getLife(){						//Retourne le l'état physique du véhicule
		return $this->life;
	}
}