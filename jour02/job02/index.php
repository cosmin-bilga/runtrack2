<?php
echo "Tous les nombres de 0 à 1337 compris SAUF 26, 37, 88, 1111 et 3233. <br /><br />";

$liste = [26, 37, 88, 1111, 3233];
for ($i = 0; $i <= 1337; $i += 1) {
    if (!in_array($i, $liste)) {
        echo "$i";
        echo "<br />";
    }
}
