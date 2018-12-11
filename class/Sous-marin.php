<?php


class SousMarin extends eau {

protected $immersible;
protected $torpille;
protected $propulseur;
protected $radar;
protected $batteries;



public function immersion(){
    if ($immersible >= 50 && $immersible <= 200){                //si le sous marin est entre 50 et 200 m alors il est immergé sinon il est a la surface
        echo "Vous êtes immergé"                                    
    }
    else {
        echo "Vous êtes a la surface"
    }
}


public function lancerdetorpille(){

    if ($torpille !=0){
        echo "Vous pouvez lancer des torpilles"                 //si les torpilles ne sont pas égal 0 alors il peut lancé des torpille sinon plus de munitions
}
    else {
        echo "Plus de munitions"
    }
}


public function 


}