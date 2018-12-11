<?php


abstract class eau{

protected $moteur;
protected $gouvernail;
protected $coque;
protected $sonar;
protected $radio;


public function getMoteur(){
    return $this->moteur;
}
public function setMoteur($motor){
    $this->moteur = $motor;
}


public function getGouvernail(){
    return $this->gouvernail;
}
public function setGouvernail($rudder){
    $this->gouvernail = $rudder;
}
   

public function getCoque(){
    return $this->coque;
}
public function setCoque ($shell){
    $this->coque = $shell;
}

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