<?php
class Rectangle {
    private $longueur;
    private $largeur;

    // Constructeur pour initialiser les propriétés
    public function __construct($longueur = 0, $largeur = 0) {
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }

    // Méthode pour obtenir la longueur
    public function getLongueur() {
        return $this->longueur;
    }

    // Méthode pour obtenir la largeur
    public function getLargeur() {
        return $this->largeur;
    }

    // Méthode pour définir la longueur
    public function setLongueur($nouvelleLongueur) {
        $this->longueur = $nouvelleLongueur;
    }

    // Méthode pour définir la largeur
    public function setLargeur($nouvelleLargeur) {
        $this->largeur = $nouvelleLargeur;
    }

    // Méthode pour afficher les dimensions du rectangle
    public function afficherRectangle() {
        return "Longueur : " . $this->getLongueur() . "<br>" . "Largeur : " . $this->getLargeur();
    }
}

// Création d'un objet Rectangle avec des dimensions initiales
$rectangle = new Rectangle(10, 5);

// Affichage des dimensions du rectangle
echo $rectangle->afficherRectangle() . "</br>";

$rectangle->setLongueur(100);
$rectangle->setLargeur(500);
 
echo $rectangle->afficherRectangle();
?>