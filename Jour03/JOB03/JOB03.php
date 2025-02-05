<?php

class Rectangle{
    
    private $longueur;
    private $largeur;


    public function __construct($longueur, $largeur){
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }

    public function getlongueur(){
        return $this->longueur;
    }

    public function modifierLongueur($nLlongueur){
        $this->longueur = $nLlongueur;
    }

    public function getlargeur(){
        return $this->largeur;
    }

    public function modifierLargeur($nLargeur){
        $this->largeur = $nLargeur;
    }
    

    public function perimetre(){
        return ($this->longueur + $this->largeur) * 2;
    }

    public function surface(){
        return $this->longueur * $this->largeur;
    }


}

class Parallelepipede extends Rectangle{
    
    private $hauteur;

    function __construct($longueur, $largeur, $hauteur){
        $this->longueur = $longueur;
        $this->largeur = $largeur;
        $this->hauteur = $hauteur;
    }

    // Accesseur pour la hauteur
    public function getHauteur() {
        return $this->hauteur;
    }

    // Mutateur pour la hauteur
    public function setHauteur($hauteur) {
        $this->hauteur = $hauteur;
    }

    public function volume(){
        return $this->longueur * $this->largeur * $this->hauteur;
    }

}

// Création de l'objet Rectangle
$rectangle = new Rectangle(5, 10);

// Affichage
echo "Périmètre du rectangle : " . $rectangle->perimetre() . " unités<br>";
echo "Surface du rectangle : " . $rectangle->surface() . " unités²<br>";

// Création de l'ojet Parallélépipède
$parallelepipede = new Parallelepipede(5, 10, 20);

// Afiichage
echo "Volume du parallélépipède : " . $parallelepipede->volume() . " unités³<br>";



?>