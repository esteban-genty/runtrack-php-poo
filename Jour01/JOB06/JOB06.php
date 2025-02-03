<?php

// Création d'une classe
class Personnage{

    // Propriétés de la classe
    private $x;
    private $y;

    // Constructeur pour initialiser les propriétés
    public function __construct($x = 0, $y = 0){
        $this->x = $x;
        $this->y = $y;
    }

    // Méthode pour déplacer le personnage vers la gauche
    public function deplacerGauche(){
        return $this->x--;
    }

    // Méthode pour déplacer le personnage vers la droite
    public function deplacerDroite(){
        return $this->x++;
    }

    // Méthode pour déplacer le personnage vers le haut
    public function deplacerHaut(){
        return $this->y++;
    }
    
    // Méthode pour déplacer le personnage vers le bas
    public function deplacerBas(){
        return $this->y--;
    }

    // Méthode pour afficher la position
    public function position(){
        return "($this->x, $this->y)";
    }

}

// Création d'un objet de la classe Personnage
$perso = new Personnage();


// Affichage
echo $perso->position();
$perso->deplacerGauche();
echo "</br>";
echo $perso->position();

// Etc pour les autres positions

?>