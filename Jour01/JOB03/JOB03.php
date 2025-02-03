<?php

class Personne {

    public $nom;
    public $prenom;

    // Constructeur pour initialiser les propriétés
    public function __construct($nom, $prenom) {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    // Méthode pour se présenter
    public function SePresenter() {
        $presentation = "Je suis " . $this->prenom . " " . $this->nom;
        return $presentation;
    }
}

$personne1 = new Personne("Doe", "John");
$personne2 = new Personne("Jean", "Dupond");

// Affichage du résultat de la présentation
echo $personne1->SePresenter() . "</br>";
echo $personne2->SePresenter();

?>