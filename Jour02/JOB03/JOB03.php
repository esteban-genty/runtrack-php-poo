<?php

class Livre {
    private $titre;
    private $auteur;
    private $nombre_page;
    private $disponible;

    public function __construct($titre = "", $auteur = "", $nombre_page = 0, $disponible = true) {
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->nombre_page = $nombre_page;
        $this->disponible = $disponible;
    }

    public function getTitre() {
        return $this->titre;
    }

    public function getAuteur() {
        return $this->auteur;
    }

    public function getDisponible() {
        return $this->disponible;
    }

    public function getNombrePage() {
        return $this->nombre_page;
    }

    public function setTitre($nouveauTitre) {
        $this->titre = $nouveauTitre;
    }

    public function setAuteur($nouveauAuteur) {
        $this->auteur = $nouveauAuteur;
    }

    public function setDisponible($nouveauDisponible) {
        $this->disponible = $nouveauDisponible;
    }

    public function setNombrePage($nouveauNombrePage) {
        if ($nouveauNombrePage > 0) {
            $this->nombre_page = $nouveauNombrePage;
        } else {
            throw new Exception("Le nombre de pages doit être supérieur à 0.");
        }
    }

    public function verification() {
        return $this->getDisponible();
    }

    public function emprunter() {
        if ($this->verification()) {
            $this->setDisponible(false);
            echo "Le livre '" . $this->getTitre() . "' a été emprunté. </br>";
        }
    }

    // Méthode pour rendre un livre
    public function rendre() {
        if (!$this->verification()) {
            $this->setDisponible(true);
            echo "Le livre '" . $this->getTitre() . "' a été rendu. </br>";
        }
    }

    // Fonction pour afficher les informations du livre
    public function afficherLivre() {
        $disponibilite = $this->verification() ? "Disponible" : "Indisponible";
        return "Titre : " . $this->getTitre() . "</br> Auteur : " . $this->getAuteur() . "</br> Nombre de pages : " . $this->getNombrePage() . "</br> Disponible : " . $disponibilite;
    }
}

try {
    $livre = new Livre("Le Petit Prince", "Antoine de Saint-Exupéry", 96);

    echo $livre->afficherLivre() . "</br> </br>";


    $livre->emprunter();
    echo $livre->afficherLivre() . " </br> </br>";


    $livre->rendre();
    echo $livre->afficherLivre() . "</br> </br>";

} catch (Exception $e) {
    echo 'Erreur : ',  $e->getMessage(), "\n";
}

<<<<<<< HEAD
?>
=======
?>
>>>>>>> e1cc6d8a1b56d450f7930d2aa34a27f332a28ebd
