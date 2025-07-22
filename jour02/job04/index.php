<?php
echo "Nombres de 1 à 100. Multiple de 3, affichez “Fizz”. Multiple de 5, affichez “Buzz”. Multiple de 3 et de 5, affichez “FizzBuzz”. <br /><br />";

for ($i = 1; $i <= 100; $i += 1) {
    if ($i % 5 == 0 and $i % 3 == 0)
        echo "FizzBuzz";
    elseif ($i % 5 == 0)
        echo "Buzz";
    elseif ($i % 3 == 0)
        echo "Fizz";
    else
        echo $i;
    echo "<br />";
}
