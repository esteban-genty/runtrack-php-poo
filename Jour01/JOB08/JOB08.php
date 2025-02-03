<?php

// TVA 20%
// TVA 10% alimentaire

class Produit{

    private $nom;
    private $prixHT;
    private $TVA;

    function __construct($nom = 0, $prixHT = 0, $TVA = 0){
        $this->nom = $nom;
        $this->prixHT = $prixHT;
        $this->TVA = $TVA;
    }

    function CalculerPrixTTC(){
        return $this -> prixHT * (1 + $this -> TVA / 100);
    }
    function afficher(){
        return "Le prix TTC de " . $this -> nom . " est de " . $this -> CalculerPrixTTC() . "€ sans la TVA le prix est de " . $this -> prixHT . "€";
    }

    function modifierNom($nouveauNom){
        return $this -> nom = $nouveauNom;
    }
    function modifierPrixHT($nouveauPrixHT){
        return $this -> prixHT = $nouveauPrixHT;
    }
    function afficherNom(){
        return $this -> nom;
    }
    function afficherTVA(){
        return $this -> TVA;
    }
}

// Création d'un objet de la classe Produit
$produit1 = new Produit("Ordinateur", 1000, 20);
$produit2 = new Produit("Souris", 50, 20);
$produit3 = new Produit("Jambon", 5, 10);

// Affichage
$produit1->CalculerPrixTTC();
echo $produit1->afficher();
echo "<br>";
echo $produit2->afficher();
echo "<br>";
echo $produit3->afficher();
echo "<br>";
$produit1->modifierNom("PC");
echo $produit1->afficher();
echo "<br>";
$produit1->modifierPrixHT(600);
echo $produit1->afficher();
echo "<br>";
echo $produit1->afficherNom();
echo "<br>";
echo $produit1->afficherTVA() . "%";



?>