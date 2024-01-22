<?php
$errores = '';
$enviado = true;

if (isset($_POST['submit'])) {
    $Nombre = $_POST['Nombre'];
    $Apellido = $_POST['Apellido'];
    $Email = $_POST['Email'];
    $Contraseña = $_POST['Contraseña'];

    

    if ($enviado == false) {
        echo "$errores";
    } else {
        $conexion = new mysqli('localhost', 'root', '', 'prueba_datos');

        if ($conexion->connect_errno) {
            die('Lo siento, hubo un problema con el servidor');
        } else {
            

            if ($found == false) {
                $sql1 = "INSERT INTO usuarios(ID,Nombre,Apellido,Contraseña,Email) VALUES (null,'$Nombre','$Apellido','$Contraseña','$Email')";
                $connect = $conexion->query($sql1);

                if ($conexion->affected_rows >= 1) {
                    // Registro exitoso, ahora iniciamos sesión
                    session_start();
                    $_SESSION['nombre'] = $Nombre;
                    
                    // Redirigimos a tu página web
                    header("Location: pagina_principal.php");
                    exit();
                }
            } else {
                echo "Hola $Nombre, este usuario ya se encuentra registrado<br />";
            }
        }

    
    }
}

require 'login.view.php';
?>
