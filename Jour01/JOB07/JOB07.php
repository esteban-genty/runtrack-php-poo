<?php
// Création d'une classe Cercle
class Cercle {
    private $rayon;

    public function __construct($rayon) {
        $this->rayon = $rayon;
    }

    public function changerRayon($nouveauRayon) {
        $this->rayon = $nouveauRayon;
    }

    public function afficherRayonCercle() {
        return $this->rayon;
    }

    public function calculerCirconference() {
        // Multiplier le rayon par 2 et par pi
        return 2 * pi() * $this->rayon;
    }

    public function calculerDiametre() {
        // Multiplier le rayon par 2
        return 2 * $this->rayon;
    }

    public function calculerAire() {
        // Multiplier pi par le rayon au carré grace à la fonction pow
        return pi() * pow($this->rayon, 2);
    }

    public function afficherInfos() {
        return "Rayon: " . $this->rayon . "<br>" .
            "Diamètre: " . $this->calculerDiametre() . "<br>" .
            "Circonférence: " . $this->calculerCirconference() . "<br>" .
            "Aire: " . $this->calculerAire() . "<br>";
    }
}

$cercle = new Cercle(5);

// Affichage
echo "Le rayon du cercle est de " . $cercle->afficherRayonCercle();
echo "<br>";

$cercle->changerRayon(10);
echo "Le rayon du cercle est maintenant de " . $cercle->afficherRayonCercle();
echo "<br>";

echo "La circonférence du cercle est de " . $cercle->calculerCirconference();
echo "<br>";

echo "Le diamètre du cercle est de " . $cercle->calculerDiametre();
echo "<br>";

echo "L'aire du cercle est de " . $cercle->calculerAire();
echo "<br>";

echo "<br>Informations complètes du cercle:<br>";
echo $cercle->afficherInfos();

?>