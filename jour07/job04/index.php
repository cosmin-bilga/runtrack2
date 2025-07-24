<?php

//declare(strict_types=1);

function calcule(float $a, string $operation, float $b): float
{
    if ((strlen($operation) != 1) or (!in_array($operation[0], ["+", "-", "/", "%", "*"]))) {
        echo "Seulement les operations - + / * et % sont autorisés.";
        return 0;
    }
    switch ($operation) {
        case "+":
            return $a + $b;
            break;
        case "-":
            return $a - $b;
            break;
        case "*":
            return $a * $b;
            break;
        case "/":
            return $a / $b;
            break;
        case "%":
            return (int)$a % (int)$b; // cast en int car modulo est censé etre une operation sur les entiers seulement
            break;
        default:
            return 0;
    }
}

echo calcule(3.12, "*", 2.15);
