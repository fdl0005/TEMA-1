<?php

$contador = 0;
$n = 13;
for ($i = 1; $i <= $n; $i++) {
    if ($i % 2 == 0 && $i % 3 == 0) {
        $contador++;

    }

}
echo "Hay " . $contador . " números del 1 al " . $n . " que son divisibles entre 2 y 3.";

?>