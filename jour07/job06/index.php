<?php

function leetSpeak(string $str): string
{
    for ($i = 0; $i < strlen($str); $i += 1) {
        switch ($str[$i]) {
            case "a":
                $str[$i] = "4";
                break;
            case "A":
                $str[$i] = "4";
                break;
            case "b":
                $str[$i] = "8";
                break;
            case "B":
                $str[$i] = "8";
                break;
            case "e":
                $str[$i] = "3";
                break;
            case "E":
                $str[$i] = "3";
                break;
            case "g":
                $str[$i] = "6";
                break;
            case "G":
                $str[$i] = "6";
                break;
            case "l":
                $str[$i] = "1";
                break;
            case "L":
                $str[$i] = "1";
                break;
            case "s":
                $str[$i] = "5";
                break;
            case "S":
                $str[$i] = "5";
                break;
            case "t":
                $str[$i] = "7";
                break;
            case "T":
                $str[$i] = "7";
                break;
            default:
                break;
        }
    }
    return $str;
}

$test_string = "Elle doit retourner la chaîne de caractères “\$str” convertie en leet speak. Cela signifie qu’elle doit la modifier de sorte à ce que :";
echo leetSpeak($test_string);
