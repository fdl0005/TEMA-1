<?php
function comprimirCadena(string $s): string
{
    $contador = 1;
    $n = strlen($s);
    $out = "";
    if ($n == 0) return "";
    for ($i = 1; $i < $n; $i++) {
        if ($s[$i] == $s[$i - 1]) {
            $contador++;
        }
        else {
            $out = $out . $s[$i - 1] . $contador;
            $contador = 1;
        }
    }
    $out .= $s[$n - 1] . $contador;
    return $out;
}

echo comprimirCadena("aaabbcc"), PHP_EOL;





?>