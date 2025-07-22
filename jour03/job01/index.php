<?php
$tab = array(200, 204, 173, 98, 171, 404, 459);

foreach ($tab as $item) {
    if ($item % 2 == 0)
        echo "$item est paire<br />";
    else
        echo "$item est impaire<br />";
}
