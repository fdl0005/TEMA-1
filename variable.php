<?php

$longitud = 7;

for ($i = 0; $i < $longitud; $i++) {
    for ($j = 0; $j < $longitud; $j++) {
        if ($i == 0 || $j == 0 || $j == $longitud - 1 || $i == $longitud - 1) {
            echo "O ";
        }
        else {
            echo "X ";
        }
    }
    echo "\n";
}

?> 