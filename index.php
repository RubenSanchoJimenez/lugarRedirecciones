<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lugares</title>
    </head>
    <body>
        <h1>Lugares</h1>
        <table>
            <?php
                require 'conexion.php';
                require 'lugar.php';
                
                $lugar = new Lugar($conexion);
                
                $lugar->listar();

            ?>   
        </table>
    </body>
</html>