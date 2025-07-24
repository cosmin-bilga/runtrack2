<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour 04 - Job 07</title>
</head>

<body>
    <form action="index.php" method="post">
        <label for="hauteur">Hauteur</label><br />
        <input type="text" id="hauteur" name="hauteur"><br />
        <label for="largeur">Largeur</label><br />
        <input type="text" id="largeur" name="largeur"><br />
        <input type="submit">
    </form>

    <?php

    if (array_key_exists("hauteur", $_POST) and ctype_digit($_POST["hauteur"])) {
        $hauteur = intval($_POST["hauteur"]);
    }

    if (array_key_exists("largeur", $_POST) and ctype_digit($_POST["largeur"])) {
        $largeur = intval($_POST["largeur"]);
    }

    if (isset($largeur) and isset($hauteur) and $largeur >= 1 and $hauteur >= 1) {
        // Toit de maison

        for ($i = 0; $i < $hauteur; $i += 1) {


            for ($j = 0; $j < $largeur; $j += 1) {
                if ($j < $largeur / 2) {
                    if ($j == $hauteur - $i - 1)
                        echo "/";
                    elseif ($j < $hauteur - $i - 1)
                        echo "&nbsp;&nbsp;";
                    else
                        echo "_";
                } else {
                    // echo "$largeur $hauteur $i $j";
                    if ($largeur - $hauteur + $i == $j)
                        echo "\\";
                    elseif ($largeur - $hauteur + $i  < $j)
                        echo "&nbsp;&nbsp;";
                    else
                        echo "_";
                }
            }
            echo "<br />";
        }

        // Corps maison

        for ($i = 0; $i < $hauteur - 1; $i += 1) {
            for ($j = 0; $j < $largeur; $j += 1) {
                if ($j == 0 or $j == $largeur - 1)
                    echo '|';
                else
                    echo "&nbsp;&nbsp;";
            }
            echo '<br />';
        }
        for ($j = 0; $j < $largeur; $j += 1) {
            if ($j == 0 or $j == $largeur - 1)
                echo '|';
            else
                echo "_";
        }
        echo "<br />";
    } else
        echo "Merci d'introduire des valeurs valides dans les champs Hauteur et Longueur (nombre entiers seulement)";

    // Version SVG

    $sizefactor = 10;

    if (isset($largeur) and isset($hauteur)) {
        $hauteur *= $sizefactor;
        $largeur *= $sizefactor;
        $midpoint = $largeur / 2;

        echo "<p> Version SVG </p><br /><br />";

        echo "<svg height=\"400\" width=\"500\" xmlns=\"http://www.w3.org/2000/svg\" style=\"margin: 5vw;\">
         <path d=\"M$largeur $hauteur L$midpoint 0 L0 $hauteur L$largeur $hauteur L$largeur " . $hauteur * 2 . "L0 " . $hauteur * 2 . "L0 $hauteur Z\" style=\"fill:none;stroke:black;stroke-width:3\" />
            Sorry, your browser does not support inline SVG.
        </svg>";
    }
    ?>

</body>

</html>