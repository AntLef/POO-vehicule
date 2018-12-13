<?php


class SousMarin extends eau {

    protected $immersible;
    protected $nbTorpille;
    protected $propulseur;
    protected $radar;
    protected $batterie;


    public function __construct($sizeX,$sizeY,$sizeZ,$speed,$energyType,$weight,$color,$maxSpeed,$life,$sonar,$radio,$immersible,$nbTorpille,$propulseur,$radar,$batterie){
		parent::__construct($sizeX,$sizeY,$sizeZ,$speed,$energyType,$weight,$color,$maxSpeed,$life,$sonar,$radio);
		$this->setImmersible($immersible);
        $this->setTorpille($nbTorpille);
        $this->setPropulseur($propulseur);
        $this->setRadar($radar);
        $this->setBatterie($batterie);
    }
    
    public function getImmersible(){
        return $this->immersible;
    }
    public function setImmersible($imerger){
        $this->immersible = $imerger;
    }


    public function getTorpille(){
        return $this->nbTorpille;
    }
    public function setTorpille($torpi){
        $this->nbTorpille = $torpi;
    }


    public function getPropulseur(){
        return $this->propulseur;
    }
    public function setPropulseur($propulser){
        $this->propulseur = $propulser;
    }


    public function getRadar(){
        return $this->radar;
    }
    public function setRadar($rad){
        $this->radar = $rad;
    }


    public function getBatterie(){
        return $this->batterie;
    }
    public function setBatterie($bat){
        $this->batterie = $bat;
    }


    public function descendre(){
        if ($immersible <=200 && $immersible += 60 ){                //si le sous marin est entre 0 et 200 m alors il est immergé sinon il est a la surface
             echo "Vous êtes en train d'immergé";                                    
        }
        else {
            echo "Vous êtes a la surface";
        }
    }


    public function lancerdetorpille(){

        if ($nbTorpille !=0){
             echo "Vous pouvez lancer des torpilles";                 //si les torpilles ne sont pas égal 0 alors il peut lancé des torpille sinon plus de munitions
        }
        else {
            echo "Plus de munitions";
        }
    }


    public function remonter(){
        if ($immersible <= 200 && $immersible -=90){
            echo "vous remonté vers la surface";
        }
        else {
            echo "Vous ne remonté pas ";
        }
    }


}