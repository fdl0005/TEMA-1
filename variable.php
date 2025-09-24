<?php

$longitud = 7;

for ($i = 0; $i < $longitud; $i++) {
    for ($j = 0; $j < $longitud; $j++) {
        if ($i + $j = $longitud) {
            echo "O ";
        }
        else {
            echo "X ";
        }
    }
    echo "\n";
}

?> 