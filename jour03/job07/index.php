<?php
$str = "Certaines choses changent, et d'autres ne changeront jamais.";

// Version demandée

for ($i = 0; $i < strlen($str) - 1; $i += 1) {
    $aux = $str[$i];
    $str[$i] = $str[$i + 1];
    $str[$i + 1] = $aux;
}

$str = strtolower($str); // J'essaye de respecter l'exemple donné
$str = ucfirst($str); // avec la capitalization du 1er char et le reste en minuscule
echo $str . "<br />";

// Version alternative

$str = "Certaines choses changent, et d'autres ne changeront jamais.";

$aux = $str[0];
$str = substr($str, 1, strlen($str) - 1);
$str = $str . $aux;

$str = strtolower($str);
$str = ucfirst($str);
echo $str . "<br />";
