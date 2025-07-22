<?php
echo "Tous les nombres compris entre 0 et 1337. Le nombre 42 doit être en gras et souligné. <br /><br />";

for ($i = 0; $i <= 1337; $i += 1) {
    if ($i == 42)
        echo "<b><u>$i</u></b>";
    else
        echo "$i";
    echo "<br />";
}
