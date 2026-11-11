<?php
$host = "localhost";
$usuario = "root";
$password = "";
$base_datos = "parcial_usuarios";

$conexion = mysqli_connect($host, $usuario, $password, $base_datos);

if (!$conexion) {
    die("Error de conexión a la base de datos: " . mysqli_connect_error());
}

mysqli_set_charset($conexion, "utf8mb4");