<?php

//declare(strict_types=1); // Pour obliger le respect des types

function bonjour(bool $jour)
{
    if ($jour)
        echo "Bonjour!<br />";
    else
        echo "Bonsoir!<br />";
}

bonjour(True);
bonjour(False);
bonjour(5); // ça fonctionne pas si on active le mode strict
