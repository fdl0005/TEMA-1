<?php
$frutas =["manzana", "pera", "plátano"];
for( $i = 0; $i < count( $frutas ); $i++ ) {
    echo $frutas[$i] . "<br>";
}

foreach( $frutas as $fruta) {
    echo $fruta ."<br>";
}

$alumno = [
  
    "nombre" => "Félix",
    "edad" => 20,
    "correo" => "fdl0005@alu.medac.es"
];

foreach ( $alumno as $clave => $valor ) {
    echo "$clave : $valor <br>";
}

$numeros = [1, 2, 3];
foreach ( $numeros as &$numero) {
    $numero *= 2;
}

print_r( $numero );
?>
<?php
//Ejercicio 1: Tenemos un array indexado de colores y mediante una funcion in_array quiere saber si contiene el color azul.

$colores = ["rojo", "azul", "naranja", "negro"];
if (in_array("azul", $colores)) {
    echo "El array contiene el color azul";
} else {
    echo "El array no contiene el color azul";
}

//Ejercicio 2: Lo mismo pero sin usar funciones nativas.

$colores = ["rojo", "azul", "naranja", "negro"];
foreach ( $colores as $color ) {
    if ( $color == "azul" ) {
        echo "El array contiene el color azul";
        break;
    } else {
        echo "El array no contiene el color azul";
        break;
    }
}

//Ejercicio 3: Crear un array de números relleno y otro de numerospares vacio, llenar el de numeros pares con los numeros pares del otro array.

$numeros = [1, 2, 3, 4, 5];
$numerospares = [];
foreach ( $numeros as $numero ) {
    if ( $numero % 2 == 0 ) {
        $numerospares [] = $numero;
    }
}

//Ejercicio 4: Modificar el ejerccio anterior para que en lugar de de guardar los numeros pares, guarde los numeros multiplos de 5.

$numeros = [1, 2, 3, 4, 5];
$numerospares = [];
foreach ( $numeros as $numero ) {
    if ( $numero % 5 == 0 ) {
        $numerospares [] = $numero;
    }
}

//Ejercicio 5: Dado el siguiente codigo, imprime la suma de las edades y el promedio de las edades.

$edades = [10, 20, 21, 25];
$suma = 0;
$promedio = 0;

foreach ( $edades as $edad ) {
    $suma += $edad;
}

$promedio = $suma / count( $edades );

echo "La suma de las edades es: " . $suma . "<br>";
echo "El promedio de las edades es: " . $promedio;

?>
