<?php
$numero = 7;
function multtabla($numero) {
for ($i = 1; $i <= 10; $i++) {
    echo $numero . " x " . $i . " = " . ($numero * $i) . "\n";

}

}
multtabla($numero);
?>