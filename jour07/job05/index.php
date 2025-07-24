<?php

function occurences(string $str, string $char): int
{
    $str = mb_str_split($str); // on split pour avoir bien les characteres speciaux sur plusieurs octets, comme é è etc.
    $occurences = 0;

    foreach ($str as $c) {
        if ($c === $char)
            $occurences += 1;
    }

    return $occurences;
}

$test_string = "Cette fonction prend en paramètre une chaîne de caractères nommée \"\$str\" et un caractère nommé \"\$char\".";
$test_char = "C";

//echo "On cherche le char \"$test_char\"<br />";
//echo "Dans le string: \"" . htmlentities($test_string) . "\"<br />";

echo "Fonction occurences:" . occurences($test_string, $test_char) . "<br />";
echo "Controle avec substr:" . substr_count($test_string, $test_char);
