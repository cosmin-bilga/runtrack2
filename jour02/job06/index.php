<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>Faire un algorithme qui affiche un rectangle de 20 de largeur par 10 de hauteur, valeurs stockeés et modifiables.</p>

    <?php

    $largeur = 20;
    $hauteur = 10;



    // Version ASCII

    echo "<p> Version ASCII </p><br /><br />";

    for ($i = 0; $i < $hauteur; $i += 1) {
        for ($j = 0; $j < $largeur; $j += 1) {
            echo "*";
        }
        echo "<br />";
    }

    // Version SVG

    $sizefactor = 10;
    $largeur *= $sizefactor;
    $hauteur *= $sizefactor;

    echo "<p> Version SVG </p><br /><br />";

    echo "<svg height=\"800\" width=\"1000\" xmlns=\"http://www.w3.org/2000/svg\" style=\"margin: 5vw;\">
         <path d=\"M0 $hauteur L$largeur $hauteur L$largeur 0 L0 0 Z\" style=\"fill:none;stroke:black;stroke-width:3\" />
            Sorry, your browser does not support inline SVG.
        </svg>"

    ?>
</body>

</html>