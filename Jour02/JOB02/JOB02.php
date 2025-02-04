<?php
class Livre {
    private $titre;
    private $auteur;
    private $nombre_page;

    public function __construct($titre = "", $auteur = "", $nombre_page = 0) {
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->nombre_page = $nombre_page;
    }

    public function getTitre() {
        return $this->titre;
    }

    public function getAuteur() {
        return $this->auteur;
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

    public function setNombrePage($nouveauNombrePage) {
        if ($nouveauNombrePage > 0) {
            $this->nombre_page = $nouveauNombrePage;
        } else {
            throw new Exception("Nombre de pages trop bas");
        }
    }

    public function afficherLivre() {
        return "Titre : " . $this->getTitre() . "<br> Auteur : " . $this->getAuteur() . "<br> Nombre de pages : " . $this->getNombrePage();
    }
}

// Création d'un objet Livre avec des valeurs initiales
$livre = new Livre("Le Petit Prince", "Antoine de Saint-Exupéry", 96);

// Affichage des informations du livre
echo $livre->afficherLivre() . "<br>";

$livre->setAuteur("Ateur");
$livre->setTitre("Livre");

try {
    $livre->setNombrePage(-15);
} catch (Exception $e) {
    echo "Erreur : " . $e->getMessage() . "<br>";
}

// Affichage des informations du livre après tentative de modification
echo $livre->afficherLivre();
?>
