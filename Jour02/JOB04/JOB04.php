<?php

class Student {

    private $prenom;
    private $nom;
    private $numeroEtudiant;
    private $credits;

    public function __construct($prenom, $nom, $numeroEtudiant, $credits = 0){

        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->numeroEtudiant = $numeroEtudiant;
        $this->credits = $credits;

    }

    public function add_credits($nCredits){

        if($nCredits > 0){
            return $this->credits += $nCredits;
        }else{
            throw new Exception("Le nombre de crédits à ajouter doit être supérieur à 0.");
        }
    }

    private function studentEval(){
        if($this->credits >= 90){
            return "Excellent";
        }elseif($this->credits >= 80){
            return "Très bien";
        }elseif($this->credits >= 70){
            return "Bien";
        }elseif($this->credits >= 60){
            return "Passable";
        }else{
            return "Insufisant";
        }
    }

    public function informations_etudiants(){
        return "Prénom : " . $this->prenom ."</br> Nom = ". $this->nom . "</br> Numéro Etudiants = " . $this->numeroEtudiant . "</br> Crédits Actuelle = " . $this->credits . "</br> Niveau = " . $this->studentEval();
    }

    public function afficher_credits(){
        return "Crédits Total = " . $this->credits;
    }
}

try{
    $etudiant = new Student("John", "Doe", 145);
    echo $etudiant->informations_etudiants() . "</br> </br>";

    $etudiant->add_credits(50);
    echo $etudiant->informations_etudiants() ."</br> </br>";

    $etudiant->add_credits(20);
    echo $etudiant->informations_etudiants() ."</br> </br>";

    $etudiant->add_credits(25);
    echo $etudiant->informations_etudiants() ."</br> </br>";

    echo $etudiant->afficher_credits();

}catch(Exception $e){
    echo "". $e->getMessage() ."";
}

?>