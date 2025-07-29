<?php
session_start();

// Initialisation de la partie

function initialisation_partie()
{

    $_SESSION["jeu"] = [["-", "-", "-"], ["-", "-", "-"], ["-", "-", "-"]];
    $_SESSION["joueur"] = "X";
}

function verification_victoire(): string
{
    foreach ($_SESSION["jeu"] as $row)
        if (count(array_unique($row)) === 1 and $row[0] !== "-")  // condition victoire ligne
            return $row[0];



    for ($i = 0; $i < count($_SESSION["jeu"][0]); $i += 1) { // condition colonnes
        $column_match = true;
        for ($j = 1; $j < count($_SESSION["jeu"]); $j += 1) {
            if ($_SESSION["jeu"][0][$i] === "-" or $_SESSION["jeu"][$j][$i] !== $_SESSION["jeu"][0][$i]) {
                $column_match = false;
                break;
            }
        }
        if ($column_match)
            return $_SESSION["jeu"][0][$i];
    }

    if ($_SESSION["jeu"][1][1] !== "-")  // Verification condition diagonales
        if (
            $_SESSION["jeu"][1][1] === $_SESSION["jeu"][0][0]
            and $_SESSION["jeu"][1][1] === $_SESSION["jeu"][2][2]
        )
            return $_SESSION["jeu"][1][1];
        elseif (
            $_SESSION["jeu"][1][1] === $_SESSION["jeu"][0][2]
            and $_SESSION["jeu"][1][1] === $_SESSION["jeu"][2][0]
        )
            return $_SESSION["jeu"][1][1];

    // Verification match nul
    foreach ($_SESSION["jeu"] as $row)
        foreach ($row as $cell)
            if ($cell === "-") //si cellule disponible -> on continue
                return "";
    return "-";
}



//$jeu = [["-", "X", "O"], ["-", "X", "O"], ["-", "X", "-"]];

function set_cell()
{
    $selected_cell = explode("-", array_key_first($_POST));
    if ($_SESSION["jeu"][(int)$selected_cell[0]][(int)$selected_cell[1]] !== "-")
        return false;
    $_SESSION["jeu"][(int)$selected_cell[0]][(int)$selected_cell[1]] = $_SESSION["joueur"]; //set la valeur du joueur courant
    return true;
}

// Fonction qui gere le logique du jeu
function logique_jeu(): string
{
    $message = "";
    if (isset($_POST["reinit"]) or !isset($_SESSION["jeu"])) {
        initialisation_partie();
        $message = "Partie (re)initialisée; Joueur X commence en premier";
    } elseif ($_POST) {
        if (!set_cell())
            return "Erreur detecté. Veuillez choisir à nouveau joueur " .  $_SESSION["joueur"];
        //set_cell();
        if (verification_victoire() == "") { // pas encore de gagnant
            if ($_SESSION["joueur"] == "X") {
                $_SESSION["joueur"] = "O";
                $message = "C'est le tour au joueur O";
            } else {
                $_SESSION["joueur"] = "X";
                $message = "C'est le tour au joueur X";
            }
        } elseif (verification_victoire() == "-")
            $message = "Match nul!";
        else {
            $message = "Joueur " . verification_victoire() . " a gagné!";
            initialisation_partie();
        }
    }

    return $message;
}



// Fonction qui genere le tableau de jeu
function generate_game_table(array $jeu): string
{
    $html = "<table><form action=\"index.php\" method=\"post\">";
    $row_index = 0;

    foreach ($jeu as $row) {
        $html .= "<tr>";
        $column_index = 0;
        foreach ($row as $cell) {
            $html .= "<td>";
            if ($cell == "-")
                $html .= "<input type=\"submit\" value=\"$cell\" name=\"$row_index-$column_index\"></td>";
            else
                $html .= "<p>" . $cell . "</p></td>";
            $column_index += 1;
        }
        $html .= "</tr>";
        $row_index += 1;
    }
    return $html .= "</form>";
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour 08 - Job 05</title>
    <link rel="stylesheet" type="text/css" href="i.css">
</head>

<body>
    <h1><?php echo logique_jeu() ?></h1>
    <?php echo generate_game_table($_SESSION["jeu"]); ?>
    <form action="index.php" method="post">
        <input type="submit" value="Reinitialisaiton de la partie" name="reinit">
    </form>
</body>

</html>