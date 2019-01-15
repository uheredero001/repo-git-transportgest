<?php
    $usuariobd = "TranspoUser";
    $contraseñabd= "";
    $bd="Transportgest";
    $servidorbd="localhost";
    $conexionbd = mysqli_connect($servidorbd, $usuariobd, $contraseñabd, $bd);
    echo "Exito de conexión a bd.";
?>
