<?php
echo "Les nombres premiers jusqu’à 1000. <br /><br />";

for ($i = 2; $i <= 1000; $i += 1) {
    $prime = true;
    for ($j = 2; $j <= sqrt($i); $j += 1) {
        if ($i % $j == 0) {
            $prime = false;
            break;
        }
    }
    if ($prime)
        echo "$i<br />";
}
