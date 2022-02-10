<?php
    if(isset($_POST['Enviar'])){
        if(strlen($_POST['Nombre']) >= 1 && strlen($_POST['Apellido']) >= 1 && strlen($_POST['Edad']) >= 1){
            $Nombre = trim($_POST['Nombre']);
            $Apellido = trim($_POST['Apellido']);
            $Edad = trim($_POST['Edad']);
            $consulta = "INSERT INTO formulario(nombre, apellido, edad) VALUES ('$Nombre','$Apellido','$Edad')";
            $resultado = mysqli_query($conn, $consulta);
            if($resultado){
                echo "Se ha realizado la inserción de datos. Espere 2 segundos para ser redirigido";
                echo "
                    <script type=\"text/javascript\">
                        setTimeout( function() { window.location.href = 'index.php'; }, 2000 );
                    </script>
                ";
            }
            else{
                echo "No se logró completar la inserción de datos. Espere 2 segundos para ser redirigido";
                echo "
                    <script type=\"text/javascript\">
                        setTimeout( function() { window.location.href = 'index.php'; }, 2000 );
                    </script>
                ";
            }
        }
        else{
            echo "Complete los campos";
        }
    }
?>