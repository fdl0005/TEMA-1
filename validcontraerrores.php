<?php
function validarPass( string $pass): bool 
{
    if (strlen($pass) < 8) {
        echo"La contraseña debe tener al menos 8 caracteres.";

    } else if ($tieneMayus = (bool) !preg_match('/[A-Z]/', $pass)) {
        echo "La contraseña debe tener al menos una letra mayúscula.";

    } else if ($tieneMinus = (bool) !preg_match('/[a-z]/', $pass)) {
        echo "La contraseña debe tener al menos una letra minúscula.";

    } else if ( $tieneDig = (bool) !preg_match('/\d/', $pass)) {
        echo "La contraseña debe tener al menos un dígito.";

    } else {
        echo "La contraseña es válida.";

    }

    return true;

}

$pass = "Hola123456";
validarPass($pass);

?>