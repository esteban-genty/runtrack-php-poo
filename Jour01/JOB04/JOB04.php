<?php

class Point {

    private $x;
    private $y;

    // Constructeur pour initialiser les propriétés
    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }

    // Méthode pour afficher les points
    public function afficherLesPoints() {
        $afficher = "($this->x, $this->y)";
        return $afficher;
    }

    // Méthode pour afficher le point X
    public function afficherX(){
        return $this->x;
    }
    
    // Méthode pour afficher le point Y
    public function afficherY(){
        return $this->y;
    }

    // Méthode pour changer le point X
    public function changerX($nouveauX){
        return $this-> x = $nouveauX;
    }

    // Méthode pour changer le point Y
    public function changerY($nouveauY){
        return $this-> y = $nouveauY;
    }

}

// Création d'un objet de la classe Point
$point1 = new Point(5, 10);
$point2 = new Point(15, 20);

// Affichage
echo $point1->afficherLesPoints();
echo "</br>";
echo $point1->afficherX();
echo "</br>";
echo $point1->afficherY();
echo "</br>";
echo $point2->changerX(300);
echo "</br>";
echo $point2->changerY(400);


?>