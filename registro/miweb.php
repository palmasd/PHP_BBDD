<?php
//si el usuario está registado le redirigimos a la página de login
//una vez ha pasado por el login le llevamos a la página que deseemos

header('Location: login.php' );

include 'cerrar_sesion.php';

?>