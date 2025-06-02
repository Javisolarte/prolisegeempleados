<?php
// Mostrar errores (solo para desarrollo)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Incluir la conexión
include 'db_config.php';

// Capturar y limpiar datos del formulario
$nombre = trim($_POST['nombre']);
$direccion = trim($_POST['direccion']);
$telefono = isset($_POST['telefono']) ? trim($_POST['telefono']) : null;
$numero_camaras = intval($_POST['numero_camaras']);
$numero_guardias = intval($_POST['numero_guardias']);
$ruta_imagen = 'img/courses/2.png'; // Ruta por defecto si no se sube imagen

// Verificar si ya existe el lugar
$query_verificar = "SELECT id_lugar FROM lugares_seguridad WHERE nombre = ?";
$stmt = mysqli_prepare($conexion, $query_verificar);
mysqli_stmt_bind_param($stmt, "s", $nombre);
mysqli_stmt_execute($stmt);
mysqli_stmt_store_result($stmt);

if (mysqli_stmt_num_rows($stmt) > 0) {
    mysqli_stmt_close($stmt);
    header("Location: todos-lugares.php?duplicado=1");
    exit();
}
mysqli_stmt_close($stmt);

// Manejar imagen si se sube
if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] === 0) {
    $extension = pathinfo($_FILES['imagen']['name'], PATHINFO_EXTENSION);
    $nombre_limpio = preg_replace("/[^a-zA-Z0-9_-]/", "_", strtolower($nombre));
    $nuevo_nombre = 'lugar_' . $nombre_limpio . '.' . $extension;
    $ruta_destino = 'lugares/' . $nuevo_nombre;

    if (move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta_destino)) {
        $ruta_imagen = $ruta_destino;
    }
}

// Insertar en la base de datos
$query_insertar = "INSERT INTO lugares_seguridad 
(nombre, direccion, telefono, ruta_imagen, numero_camaras, numero_guardias)
VALUES (?, ?, ?, ?, ?, ?)";

$stmt_insert = mysqli_prepare($conexion, $query_insertar);
mysqli_stmt_bind_param($stmt_insert, "ssssii", 
    $nombre, $direccion, $telefono, $ruta_imagen, $numero_camaras, $numero_guardias);

if (mysqli_stmt_execute($stmt_insert)) {
    header("Location: todos-lugares.php?exito=1");
    exit();
} else {
    echo "Error al insertar: " . mysqli_error($conexion);
}

mysqli_stmt_close($stmt_insert);
mysqli_close($conexion);
?>
