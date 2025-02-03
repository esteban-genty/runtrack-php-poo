<?php

class Point {

    private $x;
    private $y;

    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }

    public function afficherLesPoints() {
        $afficher = "($this->x, $this->y)";
        return $afficher;
    }

    public function afficherX(){
        return $this->x;
    }
    
    public function afficherY(){
        return $this->y;
    }

    public function changerX($nouveauX){
        return $this-> x = $nouveauX;
    }

    public function changerY($nouveauY){
        return $this-> y = $nouveauY;
    }

}

$point1 = new Point(5, 10);
$point2 = new Point(15, 20);

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