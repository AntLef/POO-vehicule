<?php

<<<<<<< Updated upstream
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

	public function __construct($sizeX,$sizeY,$sizeZ,$speed,$energyType,$weight,$color){	//Constructeur de la classe véhicule complet
		$this->sizeX = $sizeX;
		$this->sizeY = $sizeY;
		$this->sizeZ = $sizeZ;
		$this->speed = $speed;
		$this->energyType = $energyType;
		$this->weight = $weight;
		$this->color = $color;

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
	public function setSizeX(int $size){			//Permet de fixer la longueur du véhicule (30m max, taille de la plus grande limousine du monde)
		if($size > 3000){
			echo "La limousine la plus grande du monde est plus petite que ça, arrete tes bétises !";
		}else{
			$this->sizeX = $size;
		}
	}
	public function setSizeY(int $size){			//Permet de fixer la hauteur du véhicule (entre 50cm et 2m50 max)
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
	public function setSizeZ(int $size){			//Permet de fixer la largeur du véhicule (2m50 max)
		if($size > 250){
			echo "On aime pas trop les monster Trucks ici";
		}else if($size <= 0){
			echo "Une taille négative, j'arrive pas a voir le concept";
			return -1;
		}else{
			$this->sizeZ = $size;
		}
	}
	public function setSpeed(int $speed){			//Permet de fixer la vitesse entre 0 et 200 km/h
		if($vitesse < 0){
			echo "Tu essaye de mettre une vitesse négative ? Bravo !";
			return -1;
		}elseif ($vitesse > 200) {
			echo "On est pas sur l'autobanh allemande, pauvre fou !";
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

}
=======
class vehicule{

protected $tailleHauteur;
protected $tailleLargeur;
Protected $tailleLongueur;
Protected $vitesse;
Protected $energie;
Protected $poids;
Protected $couleur;

public function getTailleHauteur(){
    return $this->tailleHauteur 
}
public function setTailleHauter($hauteur){
    $this->tailleHauteur = $hauteur;
}


public function tailleLargeur(){
    return $this->tailleLargeur
}
public function setTailleHauter($largeur){
    $this->tailleLargeur = $largeur;
}


public function tailleLongueur(){
    return $this->tailleLongueur 
}
public function setTailleLongeur($longueur){
    $this->tailleLongeur = $longueur;
}


public function getVitesse(){
    return $this->vitesse 
}
public function setVitesse($speed){
    $this->vitesse = $speed;
}


public function getEnergie(){
    return $this->energie
}
public function setEnergie($energy){
    $this->energie = $energy;
}


public function getpoids(){
    return $this->poids
}
public function setPoids($wheight){
$this->poids = $wheight;
}


public function getCouleur(){
    return $this->couleur 
}
public function setCouleur($color){
$this->couleur = $color;
}

public function _construct($tailleHauteur,$tailleLargeur,$tailleLongueur,$vitesse,$energie,$poids,$couleur){
    $this->setTailleHauteur ($tailleHauteur);
    $this->setTailleLargeur ($tailleLargeur);
    $this->setTailleLongeur ($tailleLongueur);
    $this->setVitesse ($vitesse);
    $this->setEnergie ($energie);
    $this->setPoids ($poids);
    $this->setcouleur ($couleur);
}

public function Demarer(){
    if ($vitesse >= 0){

    echo "sa démarre !!!!"
    }
    else{
        echo "appuie sur le champigon"
    }

}

public function Arreter(){

$this->$vitesse = 0;

}

public function Accelerer(){

$this->vitesse = $this->vitesse + 5;

}

public function Freiner(){

$this->vitesse -= 5;

}


public function tourner(){

}





    
}















?>
>>>>>>> Stashed changes
