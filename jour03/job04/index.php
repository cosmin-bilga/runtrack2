<?php
$str = "Dans l'espace, personne ne vous entend crier";


// Version demandée, avec parcours de la chaine

$count = 0;

for ($i = 0; $i < strlen($str); $i += 1) {
    $count += 1;
}

echo "La chaine \$str est composée de $count caracteres.<br />";

// Version rapide 


$count = strlen($str);
echo "La chaine \$str est composée de $count caracteres.";
