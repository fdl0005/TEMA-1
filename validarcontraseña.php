<?php
function validarPass( string $pass): bool 
{
    if (strlen($pass) < 8) return false;
    $tieneMayus = (bool) preg_match('/[A-Z]/', $pass);
    $tieneMinus = (bool) preg_match('/[a-z]/', $pass);
    $tieneDig = (bool) preg_match('/\d/', $pass);
    return $tieneMayus && $tieneMinus && $tieneDig;

}

$p = "Hola1dryghdi";
if (validarPass($p)) {
    echo "Conraseña válida";
}else {
    echo "Contraseña no válida";
}

?>