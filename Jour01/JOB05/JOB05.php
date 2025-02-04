<?php
// Création d'une classe Animal
class Animal {

    private $age;
    private $prenom;

    // Constructeur pour initialiser les propriétés
    public function __construct($age = 0, $prenom = "") {
        $this->age = $age;
        $this->prenom = $prenom;
    }

    // Méthode pour afficher l'âge
    public function afficherAge() {
        return $this->age;
    }

    // Méthode pour vieillir l'animal
    public function vieillir() {
        return $this->age++;
    }

    // Méthode pour nommer l'animal
    public function nommer($prenom) {
        return $this->prenom = $prenom;
    }

    // Méthode pour afficher le nom
    public function afficherNom() {
        return $this->prenom;
    }
}

$animal = new Animal();

echo "L'âge de l'animal est " . $animal->afficherAge() . " ans";
echo "<br>";

// Vieillir l'animal
$animal->vieillir();
echo "L'âge de l'animal est " . $animal->afficherAge() . " ans";
echo "<br>";


// Nommer l'animal
$animal->nommer("Luna");
echo "L'animal se nomme " . $animal->afficherNom();

?>