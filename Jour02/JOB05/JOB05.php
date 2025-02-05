<?php

class Voiture{
    private $marque;
    private $modele;
    private $anne;
    private $kilometre;
    private $en_marche;
    private $reservoir;

    public function __construct($marque, $modele, $anne, $kilometre, $en_marche = false, $reservoir = 50){
        $this->marque = $marque;
        $this->modele = $modele;
        $this->anne = $anne;
        $this->kilometre = $kilometre;
        $this->en_marche = $en_marche;
        $this->reservoir = $reservoir;
    }

    // Get et Set Marque
    public function getMarque(){
        return $this->marque;
    }

    public function setMarque($nMarque){
        return $this->marque = $nMarque;
    }

    // Get et Set modèle
    public function getModele(){
        return $this->modele;
    }

    public function setModele($nModele){
        return $this->modele = $nModele;
    }

    // Get et Set Année
    public function getAnne($anne){
        return $this->anne;
    }

    public function setAnne($nAnne){
        return $this->anne = $nAnne;
    }

    // Get et Set Kilometre
    public function getKillometre(){
        return $this->kilometre;
    }

    public function setKillometre($nKillometre){
        return $this->kilometre = $nKillometre;
    }

    // Get et Set en marche
    public function getEnMarche(){
        return $this->en_marche;
    }

    // Get et Set réservoir
    public function getReservoir(){
        return $this->reservoir;
    }

    public function setReservoir($nReservoir){
        return $this->reservoir = $nReservoir;
    }

    private function verifier_plein(){
    if($this->reservoir >= 5){
            return $this->reservoir;
        }else{
            throw new Exception("La voiture n'a pas assez de carburant pour démarrer");
        }
    }

    
    // Méthode démarrer et arreter voiture
    public function demarrer(){
        try{
            if($this->verifier_plein() >= 5){
                return $this->en_marche = true;
            }
        }catch(Exception $e){
            return $e->getMessage();
        }
    }

    public function arreter(){
    return $this->en_marche = false;
    }

    // Méthode pour afficher les informations de la voiture
    public function informationsVoiture(){
        return "Marque : " . $this->marque . "</br> Modèle : " . $this->modele 
        . "</br> Année : " . $this->anne ."</br> Kilometre : ". $this->kilometre 
        . "</br> Démarrer : " . $this->en_marche . "</br> Reservoir (L) : " . $this->reservoir 
        . "</br>Verifier Plein : " . $this->verifier_plein();
    }

}

try{
    // Objet Voiture
    $voiture = new Voiture("Renault", "Clio4", 2016, 10000);

    // Affichage
    $voiture->setReservoir(10);
    $voiture->demarrer();
    echo $voiture->informationsVoiture() . "</br> </br>";

    $voiture->setReservoir(2);
    $voiture->demarrer();
    $voiture->informationsVoiture();
}catch(Exception $e){
    echo $e->getMessage();
}

?>