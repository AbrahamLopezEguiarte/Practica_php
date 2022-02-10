<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Formulario</title>
</head>
<body>
    <?php
        include("conexion/conexion.php");
        $conn = ConexionBD(); 
        include("store.php");
    ?>
    <header>
        <h1>Formulario php</h1>
    </header>
    <div>
        <p>Ingrese la información que desea insertar en la base de datos</p>
    </div>
    <form action="formulario.php", method="post">
        <input type="text", name="Nombre", placeholder="Nombre">
        <input type="text", name="Apellido", placeholder="Apellido">
        <input type="text", name="Edad", placeholder="Edad">
        <input type="submit", name="Enviar", value="Enviar">
    </form>
</body>
</html>