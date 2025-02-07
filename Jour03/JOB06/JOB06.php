<?php

class Vehicule {

    private $marque;
    private $modele;
    private $annee;
    private $prix;

    public function __construct($marque, $modele, $annee, $prix){
<<<<<<< HEAD
            $this->marque = $marque;
            $this->modele = $modele;
            $this->annee = $annee;
            $this->prix = $prix;
=======
        $this->marque = $marque;
        $this->modele = $modele;
        $this->annee = $annee;
        $this->prix = $prix;
>>>>>>> 4eb90a4c99b5ee2ac3cd2cf1fd057d44dc508aa5
    }

    public function informationsVehicule(){
        return "Marque = " . $this->marque . "</br> Modele = " . $this->modele . "</br> Année =  " . $this->annee . "</br> Prix =  " . $this->prix . " €";
    }

    public function demarrer(){
        return "Attention je roule !";
    }

}

class Voiture extends Vehicule {

    private $porte;

    public function __construct($marque, $modele, $annee, $prix, $porte = 4){
        parent::__construct($marque, $modele, $annee, $prix);
        $this->porte = $porte;
    }

    public function informationsVehiculee(){
        return parent::informationsVehicule() . "</br> Portes = " . $this->porte;
    }

    
    public function demarrer(){
        return "Vroum Vroum !";
    }


}

class Moto extends Vehicule {
    private $roue;

    public function __construct($marque, $modele, $anne, $prix, $roue = 2){
        parent::__construct($marque, $modele, $anne, $prix);
        $this->roue = $roue;
    }

    public function informationsVehicule(){
        return parent::informationsVehicule() . " </br> Roue = " . $this->roue;
    }

    public function demarrer(){
        return "Brrm Brrm !";
    }
}

$vehicule = new Vehicule("Peugeot", "208-GTI", "2018", 25000);
echo $vehicule->informationsVehicule() . "</br> </br>";

$voiture = new Voiture("Peugeot", "208-GTI", "2018", 25000);
echo $voiture->informationsVehicule() . "</br>" . $voiture->demarrer() . "</br> </br>";

$moto = new Moto("BMW", "S1000RR", "2025", "21400");
echo $moto->informationsVehicule() . "</br>" . $moto->demarrer();	

?>