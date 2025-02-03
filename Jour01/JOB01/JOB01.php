<?php

// Création d'une classe 
class Operation{

    // Propriétés de la classe
    public $nombre1 = 10;
    public $nombre2 = 5;

}

// Création d'un objet de la classe Operation
$operation = new Operation();

echo "Nombre 1 : " . $operation-> nombre1;
echo "</br>";
echo "Nombre 2 : " . $operation-> nombre2;

?>