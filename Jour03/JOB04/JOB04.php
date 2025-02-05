<?php

class Forme{


    public function aire(){
        return 0;
    }

}

class Rectangle extends Forme{
    private $longueur;
    private $largeur;

    public function __construct($longueur, $largeur){
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }

    public function getLongueur(){
        return $this->longueur;
    }

    public function setLongueur($nLongueur){
        return $this->longueur = $nLongueur;
    }

    public function getLargeur(){
        return $this->largeur;
    }

    public function setLargeur($nLargeur){
        return $this->largeur = $nLargeur;
    }

    public function aire(){
        return $this->longueur * $this->largeur;
    }
}

$rectangle = new Rectangle(10, 5);

echo "L'aire du rectangle est : " . $rectangle->aire();

?>