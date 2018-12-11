<?php


abstract class eau extends vehicule{


    protected $sonar;
    protected $radio;


    public function getSonar(){
        return $this->sonar;
    }
    public function setSonar($son){
        $this->sonar = $son;
    }

    public function getRadio(){
        return $this->radio; 
    }
    public function setRadio($rad){
        $this->radio = $rad;
    }

}



?>