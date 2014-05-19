<?php
    include 'conexion.php';

    $usuario = $_POST['txtuser'];
    $contrasena = $_POST['txtpass'];
    $q1 = $conexion->query("SELECT * FROM administradores WHERE usuario = '$usuario'");
    if ($r1 = $q1->fetch_array(MYSQLI_ASSOC)) {
        if ($r1['contrasena'] == $contrasena) {
            session_start();
            $_SESSION['user'] = $usuario;
            echo "<script> location.href='home.php' </script>";
        }
    }
    $q1->free();
    $conexion->close();
?>