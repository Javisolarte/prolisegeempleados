<?php
$servername = "162.241.61.240";
$username = "empre479_Solarte";
$password = "1234567891011121314151617181920";
$dbname = "empre479_proliseg_db";

// Crear la conexión a la base de datos
$conexion = mysqli_connect($servername, $username, $password, $dbname);

// Verificar la conexión
if (!$conexion) {
    die("Error al conectar con la base de datos: " . mysqli_connect_error());
}
?>