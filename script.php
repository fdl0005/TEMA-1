<!DOCTYPE html>
    <html lang="es">    
    <head>

        <meta charset="UTF-8">
        <tittle>Cliente-Servidor<tittle>
            
    </head>

    <body>
        <h1 id = "hora">Hola Mundo</h1>

        <script>
            
            var hora = new Date().getHours();

            if (hora >= 6 && hora < 12) {
                document.getElementById("hora").innerHTML = "Buenos días";
            } else if (hora >= 12 && hora < 20) {
                document.getElementById("hora").innerHTML = "Buenas tardes";
            } else {
                document.getElementById("hora").innerHTML = "Buenas noches";
            }

        </script>

    </body>

</html>
