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

class Cercle extends Forme{

    private $radius;

    public function __construct($radius){
        $this->radius = $radius;
    }

    public function getRadius(){
        return $this->radius;
    }

    public function setRadius($nRadius){
        $this->radius = $nRadius;
    }

    public function aire() {
        return pi() * pow($this->radius, 2); // Aire du cercle = PI * rayon au carré
    }

}

$rectangle = new Rectangle(10, 5);
echo "L'aire du rectangle : " . $rectangle->aire() . "</br>";

$cercle = new Cercle(10);
echo "L'aire du cercle : " .$cercle->aire();

?>