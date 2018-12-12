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
	protected $maxSpeed;		//Vitesse max du véhicule(pour la vérification du setSpeed)
	protected $orientation = 0;	//Sert d'index au tableau constant possibleOrientation
	protected $possibleOrientation = array("Nord","Est","Sud","Ouest");

	public function __construct($sizeX,$sizeY,$sizeZ,$speed,$energyType,$weight,$color,$maxSpeed){	//Constructeur de la classe véhicule complet
		$this->setSizeX($sizeX);
		$this->setSizeY($sizeY);
		$this->setSizeZ($sizeZ);
		$this->setSpeed($speed);
		$this->setEnergy($energyType);
		$this->setWeight($weight);
		$this->setColor($color);
		$this->maxSpeed = $maxSpeed;
	}

	public function getSize(){						//Ce getter récupère les 3 attributs de taille sous forme de tableau, le echo sert de test
		$tabSize = array($sizeX,$sizeY,$sizeZ);
		echo "<br>Ce véhicule fait ".$this->sizeX."cm de long, ".$this->sizeY."cm de haut, ".$this->sizeZ."cm de profondeur.";
		return $tabSize;
	}
	public function getSpeed(){						//Getter de la vitesse, l'echo sert de test
		echo "<br>Ce véhicule va à ".$this->speed." km/h."; 
		return $this->speed;
	}
	public function getEnergy(){
		echo "<br>Ce véhicule fonctionne à l'énergie ".$this->energyType.".";
		return $this->energyType;
	}
	public function getWeight(){					//Getter du poids du véhicule
		echo "<br>Ce véhicule pèse ".$this->weight." kg";
		return $this->weight;
	}
	public function getColor(){	
		echo "<br>Ce véhicule est de couleur ".$this->color.".";
		return $this->color;
	}
	public function getOn(){						//Getter de l'état du véhicule (allumé ou non)
		return $this->isOn;
	}
	public function setSizeX($size){				//Permet de fixer la longueur du véhicule (30m max, taille de la plus grande limousine du monde)
		/*if($size > 3000){
			echo "La limousine la plus grande du monde est plus petite que ça, arrete tes bétises !";
		}else*/if($size <=0){
			echo "<br>Une taille négative, c'est compliqué à fabriquer.";
			return -1;
		}else{
			$this->sizeX = $size;
		}
	}
	public function setSizeY($size){				//Permet de fixer la hauteur du véhicule (entre 50cm et 2m50 max)
		/*if($size > 250){
			echo "On aime pas trop les monster Trucks ici";
			return -1;
		}else */if($size <= 0){
			echo "<br>Un véhicule de moins de 0cm ? ça parait compliqué...";
			return -1;
		}else{
			$this->sizeY = $size;
		}
	}
	public function setSizeZ($size){				//Permet de fixer la largeur du véhicule (2m50 max)
		/*if($size > 250){
			echo "On aime pas trop les monster Trucks ici";
		}else */if($size <= 0){
			echo "<br>Une taille négative, j'arrive pas a voir le concept.";
			return -1;
		}else{
			$this->sizeZ = $size;
		}
	}
	public function setSpeed($speed){			//Permet de fixer la vitesse entre 0 et la vitesse max en km/h
		if($speed < 0){
			echo "<br>Tu essaye de mettre une vitesse négative ? Bravo !";
			return -1;
		}else {
			$this->speed = $speed;
			echo"<br>Ce véhicule a désormais une vitesse de ".$this->speed.".";
		}
	}
	public function setEnergy($energyType){			//Permet de fixer le type d'énergie utilisé par le véhicule
		if(!in_array($energyType,["musculaire","électrique","solaire","vent","thermique"])){
			echo "<br>Type d'énergie invalide.";
		}else{
			$this->energyType = $energyType;
			echo "<br>Le véhicule fonctionne désormais à l'énergie ".$energyType.".";
		}
	}
	public function setWeight($weight){				//Permet de fixer le poids
		if($weight <= 0){
			echo "<br>Tu essaye vraiment de définir un poids négatif ? VRAIMENT ?";
			return -1;
		}else{
			$this->weight = $weight;
		}
	}
	public function setColor($color){				//Permet de set la couleur du véhicule
		if(!in_array($color, ["Bleue","Rouge","Jaune","Vert","Gris","Blanc","Noir","Orange","Violet"])){
			echo "<br>Couleur invalide.";
			return -1;
		}else{
			$this->color = $color;
		}
	}
	public function Start(){						//Allume le moteur du véhicule (ou ouvre les voiles dans le cas du bateau à voile)
		if($isOn == true){
			echo "<br>Ce véhicule est déjà allumé.";
			return -1;
		}
		$this->isOn = true;
		echo "<br>Ce véhicule est allumé.";
	}
	public function Stop(){							//Eteint le moteur du véhicule (ou ferme les voiles dans le cas du bateau à voile)
		if($isOn == false){
			echo "<br>Ce véhicule est déjà arreté.";
			return -1;
		}
		$this->isOn = false;
		echo "<br>Ce véhicule est arreté.";
	}
	public function Accelerate($maxSpeed, $accel){	//Permet d'augmenter la vitesse d'un nombre en argument(en la limitant au max défini en argument également)
		if($this->speed >= $maxSpeed - $accel){
			echo "<br>Vous avez atteint la vitesse maximale";
			$this->speed = $maxSpeed;
			return;
		}
		$this->speed += $accel;
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
}