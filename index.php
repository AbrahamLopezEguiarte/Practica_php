<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Tarea php</title>
</head>
<body>
    <header>
        <h1>Práctica php</h1>
    </header>
    <div>
        <a href="/formulario.php">Click aquí para añadir información a la tabla</a>
    </div>
    <?php
        include("conexion/conexion.php");
        $conn = ConexionBD();
    ?>
    <table>
        <tr>
            <th>nombre</th>
            <th>apellido</th>
            <th>edad</th>
        </tr>
        <?php
        $result = mysqli_query($conn, "SELECT * from formulario");
        while($mostrar = mysqli_fetch_array($result)){
        ?>
        <tr>
            <td><?php echo $mostrar['nombre'] ?></td>
            <td><?php echo $mostrar['apellido'] ?></td>
            <td><?php echo $mostrar['edad'] ?></td>
        </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>