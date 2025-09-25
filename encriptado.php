<?php
function codificar($contraseña) {
    
    $letras = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "ñ", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];
    $letrasinv = ["z", "y", "x", "w", "v", "u", "t", "s", "r", "q", "p", "o", "ñ", "n", "m", "l", "k", "j", "i", "h", "g", "f", "e", "d", "c", "b", "a"];
    
    strlen($contraseña);

    for ($i = 0; $i < count($letras); $i++) {
        for ($j =0; $j < count($letrasinv); $j++) {
            if ($letras[$i] == $letrasinv[$j]) {
                $contraseña = $letrasinv[$j];
                echo $contraseña;
            }
        }
    }


}

function descodificar($contraseña) {



}

$contraseña = "contrasena";
codificar($contraseña);



?>