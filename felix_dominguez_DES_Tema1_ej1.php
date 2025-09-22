<!DOCTYPE html>
<html lang="es">
    <head>

        <meta charset="UTF-8">
        <link rel="stylesheet" href="styles.css">
        <tittle>Calculadora de años bisiestos<tittle>
            
    </head>

    <body>

        <form method="post" action="">
            <label for="año">Escribe un año:</label>
            <input type="number" name="año" id="año" required>
            <input type="submit" value="verificar">
        </form>

        <?php
        if (isset ($_POST['año'])) {
            $año =$_POST['año'];

            if (($año % 4 == 0) && ($año % 100 != 0) || ($año % 400 == 0)) {
                echo "$año es un año bisiesto";

            } else {
                echo "$año no es un año bisiesto";
            }
        }
        ?>

    </body>

</html>