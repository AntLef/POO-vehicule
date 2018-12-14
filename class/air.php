<?php  
require_once("vehicule.php");

	abstract class Air extends Vehicule
{

	protected $helice;
	protected $altitude;
	protected $roues;
	protected $radar;
	protected $radio;

	//Ici on crée un constructeur
	public function __construct($name,$sizeX,$sizeY,$sizeZ,$speed,$energyType,$weight,$color,$maxSpeed,$life,$helice,$altitude,$roues,$radar,$radio){ 
		parent::__construct($name,$sizeX,$sizeY,$sizeZ,$speed,$energyType,$weight,$color,$maxSpeed,$life);
		$this->setHelice($helice);
		$this->setAltitude($altitude);
		$this->setRoues($roues);
		$this->setRadar($radar);
		$this->setRadio($radio);
	}

	// On crée la méthode abstraite vol qui va être redéfini dans avion et hélico
	abstract function vol();

	//On va juste activer ou désactiver les roues qui sont inutiles en l'air, elles se réactivent quand on est a 100 m du sol, de manière à pouvoir atterir.
	public function rouesOffOn(){
		if ($altitude > 100){
			$roues = false;
		}
		else {
			$roues = true;
		}
	}

	//La méthode descendre va permettre de perdre de l'altitude et va vérifier si l'altitude est en dessous de 100m pour gérer l'atterrisage sans rentrer dans le sol, tout en désactivant les hélices
	public function descendre () {
		if ($speed < 50) {
			$altitude --;
		}else{
			echo "<br>Tu vas trop vite. ";
			return;
		}
		if($altitude <=100){
			echo "<br>Tu es déjà bas, tu atterris.";
			$altitude = 0;
			$helice = false;
		}
	}
	//On vérifie que le véhicule est allumé, qu'il est bien au sol et que les roues 
	//soit sortis pour pouvoir démarrer. Les hélices s'activent pour augmenter la vitesse
	public function rouler(){
		if ($isOn == true && $altitude == 0 && $roues = true) {
			echo "<br>Votre véhicule roule pour prendre de la vitesse.";
			$speed +10;
			$helice = true;
		}
		elseif ($isOn == false){
			echo "<br>Allume. Le. MOTEUR!";
			return;
		}
		else{
			echo "<br>Tu ne peux pas.. Rouler.. Dans les airs...";
			$helice = true;
			return;

		}
	}

	//Les fonctions servent respectivement à : Récupérer les infos transmises par le radar, récupérer celles transmises par la radio, récupérer l'altitude actuelle
	public function getInfoRadar(){
		return $this->radar;
	}
	public function getInfoRadio(){
		return $this->radio;
	}

	public function getAltitude(){
		return $this->altitude;
	}
	public function setHelice($helice){
		$this->helice = $helice;
	}
	public function setAltitude($altitude){
		$this->altitude = $altitude;
	}
	public function setRoues($roues){
		$this->roues = $roues;
	}
	public function setRadar($radar){
		$this->radar = $radar;
	}
	public function setRadio($radio){
		$this->radio = $radio;
	}

}

?>