<?php

class Personne{

    protected $age;

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

class Eleve extends Personne{
    
    public function allerEnCours(){
        return "Je vais en cours";
    }
    public function afficherAge(){
        return "J'ai " . $this->age . " ans";
    }
}

class Professeur{
    private $matiereEnseignee;

    function __construct($matiereEnseignee){
        $this->matiereEnseignee = $matiereEnseignee;
    }

    public function enseigner(){
        return "Le cours va commencer";
    }
}


$personne = new Personne();
$eleve = new Eleve();
$professeur = new Professeur("Maths");

echo "La personne à " . $personne->afficherAge() ." ans </br>";
$personne->modifierAge(30);
echo $personne->bonjour();
echo " la personne à " . $personne->afficherAge() ." ans </br> </br>";

echo $eleve->allerEnCours() . "</br>";
echo $eleve->afficherAge() . "</br> </br>";

echo $professeur->enseigner() . "</br>";



?>