<?php
// Mostrar errores (solo para desarrollo)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Configuración de la base de datos
$servername = "localhost"; // Cambiado
$username = "empre479_Solarte";
$password = "1234567891011121314151617181920"; // Confirma que es correcta
$dbname = "empre479_proliseg_db";

// Crear la conexión a la base de datos
$conexion = mysqli_connect($servername, $username, $password, $dbname);

// Verificar la conexión
if (!$conexion) {
    die("Error al conectar con la base de datos: " . mysqli_connect_error());
}
?>
