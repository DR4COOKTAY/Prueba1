<?php
$conexion = mysqli_connect("localhost", "root", "", "consultas");

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>
