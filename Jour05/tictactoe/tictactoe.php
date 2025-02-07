<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$game_running = true;

class TicTacToe {

    private $p1_symbol;
    private $p2_symbol;
    private $grid;

    // Constructeur
    public function __construct($p1_symbol, $p2_symbol) {
        $this->p1_symbol = $p1_symbol;
        $this->p2_symbol = $p2_symbol;
        $this->grid = [
            ['', '', ''],
            ['', '', ''],
            ['', '', '']
        ];
    }

    public function get_p1_symbol() {
        return $this->p1_symbol;
    }

    public function get_p2_symbol() {
        return $this->p2_symbol;
    }

    public function placeSymbole($row, $column){
        if(isset($this->grid[$row][$column])) {
            if(empty($this->grid[$row][$column])) {
                $this->grid[$row][$column] = $this->p1_symbol;
            }
        }
        return "Cette case est déjà occupée.";
    }
    

    
    // Méthode pour dessiner la grille 3x3
    public function drawGrid() {
        $gridHTML = "<form action='' method='POST'>";
        

        for ($column = 0; $column < 3; $column++) {
            $gridHTML .= "<div class='row'>";
            for ($row = 0; $row < 3; $row++) {

                $gridHTML .= "<button type='submit' name='cellule'>" . $this->placeSymbole($row, $column) . "</button>";
                $gridHTML .= $this->grid[$row][$column];
            }
            $gridHTML .= "</div>";
        }

        $gridHTML .= "</form>";
        return $gridHTML;
    }
    

    public function displayPlayer() {
        return "Joueur 1 : " . $this->p1_symbol . "<br>Joueur 2 : " . $this->p2_symbol;
    }
}



//$player1 = $_SESSION['player1'];
//$player2 = $_SESSION['player2'];

// Par défaut, définir les joueurs à "X" et "O"
$player1 = 'X';
$player2 = 'O';


// Créer une instance de la classe TicTacToe
$tictactoe = new TicTacToe($player1, $player2);


echo $tictactoe->displayPlayer();
echo $tictactoe->drawGrid();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    
</body>
</html>
