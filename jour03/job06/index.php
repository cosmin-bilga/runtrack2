
<?php


$str = "Les choses que l'on possède finissent pas nous posséder.";

// On transforme en array avec mb_str_split pour bien delimiter les char spéciaux sur plusieurs octets
$str = mb_str_split($str);

for ($i = count($str) - 1; $i >= 0; $i -= 1) {
    echo $str[$i];
}

echo "<br />";

// Version alternative

$str = array_reverse($str);
foreach ($str as $char)
    echo $char;
