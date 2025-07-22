<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <p>Faire un algorithme qui affiche un triangle de 5 de hauteur. Cette dimension devra être stockée dans une variable $hauteur, modifiable facilement.</p>
    <?php

    $hauteur = 5;

    // Version texte
    echo "<p> Version ASCII </p><br /><br />";

    for ($i = 0; $i < $hauteur; $i += 1) {

        for ($j = $hauteur - 1; $j >= 0; $j -= 1) {
            if ($j == $i)
                echo "/";
            elseif ($i == $hauteur - 1)
                echo "_";
            else
                // il faut 2 espaces pour un underscore en largeur
                echo "&nbsp;&nbsp;";
        }
        for ($j = 0; $j < $hauteur; $j += 1) {
            if ($j == $i)
                echo "\\";
            elseif ($i == $hauteur - 1)
                echo "_";
            else
                echo "&nbsp;&nbsp;";
        }
        echo "<br />";
    }

    // Version SVG

    $sizefactor = 10;

    $hauteur *= $sizefactor;
    $midpoint = $hauteur / 2;

    echo "<p> Version SVG </p><br /><br />";

    echo "<svg height=\"400\" width=\"500\" xmlns=\"http://www.w3.org/2000/svg\" style=\"margin: 5vw;\">
         <path d=\"M0 $hauteur L$hauteur $hauteur L$midpoint 0 Z\" style=\"fill:none;stroke:black;stroke-width:3\" />
            Sorry, your browser does not support inline SVG.
        </svg>"

    ?>
</body>

</html>