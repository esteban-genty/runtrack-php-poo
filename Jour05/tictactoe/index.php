<?php
session_start();  // Démarrer la session pour pouvoir partager des données entre pages.

require_once 'TicTacToe.php';  // Inclure la classe TicTacToe

if (isset($_POST['jouer'])) {
    $player1 = $_POST["joueur1"];
    $player2 = $_POST["joueur2"];

    // Valider les symboles des joueurs
    if (!empty($player1) && !empty($player2)) {
        // Vérifier si les symboles sont valides (X ou O)
        if (($player1 == "X" || $player1 == "O") && ($player2 == "X" || $player2 == "O")) {

            // Enregistrer les joueurs dans la session
            $_SESSION['player1'] = $player1;
            $_SESSION['player2'] = $player2;

            header('Location: tictactoe.php');
            exit;
        } else {
            echo "<p>Les symboles doivent être 'X' ou 'O'.</p>";
        }
    } else {
        echo "<p>Veuillez remplir les noms des 2 joueurs.</p>";
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TicTacToe</title>
</head>
<body>

    <main>
        <section class="joueur">
            <h1>Tic Tac Toe</h1>
            <form action="" method="POST">

                <label for="joueur1">Joueur 1 (X ou O) :</label>
                <input type="text" id="joueur1" name="joueur1" required>

                <label for="joueur2">Joueur 2 (X ou O) : </label>
                <input type="text" id="joueur2" name="joueur2" required>

                <button type="submit" name="jouer">Jouer</button>
            </form>
        </section>
    </main> 

</body>
</html>
