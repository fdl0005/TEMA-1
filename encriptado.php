<?php
function codificar($contraseña) {
    $letras = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];
    $letrasinv = ["z","y","x","w","v","u","t","s","r","q","p","o","n","m","l","k","j","i","h","g","f","e","d","c","b","a"];

    $resultado = "";

    for ($i = 0; $i < strlen($contraseña); $i++) {
        $caracter = $contraseña[$i];
        $encontrado = false;

        for ($j = 0; $j < count($letras); $j++) {
            if ($caracter == $letras[$j]) {
                $resultado .= $letrasinv[$j];
                $encontrado = true;
                break;
            }
        }

        if (!$encontrado) {
            $resultado .= $caracter;
        }
    }

    return $resultado;
}

function descodificar($contraseña) {
    $letras = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];
    $letrasinv = ["z","y","x","w","v","u","t","s","r","q","p","o","n","m","l","k","j","i","h","g","f","e","d","c","b","a"];

    $resultado = "";

    for ($i = 0; $i < strlen($contraseña); $i++) {
        $caracter = $contraseña[$i];
        $encontrado = false;

        for ($j = 0; $j < count($letrasinv); $j++) {
            if ($caracter == $letrasinv[$j]) {
                $resultado .= $letras[$j];
                $encontrado = true;
                break;
            }
        }

        if (!$encontrado) {
            $resultado .= $caracter;
        }
    }

    return $resultado;
}

$contraseña = "contraseña";

$codificada = codificar($contraseña);
$descodificada = descodificar($codificada);

echo "Contraseña codificada: " . $codificada . "\n";
echo "Contraseña decodificada: " . $descodificada . "\n";
?>
