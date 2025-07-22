<?php
echo "Les nombres de 0 à 100. Entre 0 et 20 : écrire en italique. Entre 25 et 50 : souligner. “La Plateforme_” à la place de 42. <br /><br />";

for ($i = 0; $i <= 100; $i += 1) {
    if ($i == 42)
        echo "La Plateforme_";
    elseif ($i <= 20)
        echo "<i>$i</i>";
    elseif ($i >= 25 and $i <= 50)
        echo "<u>$i</u>";
    else
        echo $i;
    echo "<br />";
}
