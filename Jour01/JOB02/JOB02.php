<?php

// Création d'une classe 
class Operation {

    // Propriétés de la classe
    public $nombre1 = 10;
    public $nombre2 = 5;

    // Méthode pour additionner les deux nombres
    public function addition() {
        $resultat = $this->nombre1 + $this->nombre2;
        return $resultat;
    }
}

// Création d'un objet de la classe Operation
$operation = new Operation();

// Affichage du résultat de l'addition
echo "Addition: " . $operation->addition();

?>