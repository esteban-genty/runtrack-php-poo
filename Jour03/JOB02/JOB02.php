<?php

// Création d'une classe Personne
class Personne{

    protected $age;

    // Constructeur
    public function __construct($age = 14){
        $this->age = $age;
    }

    public function afficherAge(){
        return $this->age;
    }
    public function bonjour(){
        return "Hello";
    }

    public function modifierAge($nouveauAge){
        $this->age = $nouveauAge;
    }
}

// Création d'une classe Eleve qui hérite de la classe Personne
class Eleve extends Personne{
    
    public function allerEnCours(){
        return "Je vais en cours";
    }
    public function afficherAge(){
        return "J'ai " . $this->age . " ans";
    }
}

// Création d'une classe Professeur
class Professeur extends Personne{
    private $matiereEnseignee;

    function __construct($matiereEnseignee){
        $this->matiereEnseignee = $matiereEnseignee;
    }

    public function enseigner(){
        return "Le cours va commencer";
    }
}

// Création d'objets
$personne = new Personne();
$eleve = new Eleve();
$professeur = new Professeur("Maths");

// Affichage
echo $eleve->bonjour() . " " . $eleve->allerEnCours() . "</br>";

$eleve->modifierAge("15");
echo $eleve->afficherAge() . "</br>";

echo $professeur->bonjour() . " " . $professeur->enseigner() . "</br>";



?>