<?php
// verificar_login.php

// Incluir el archivo de configuración de la base de datos 
include "db_config.php";

// Verificar que se recibió una solicitud POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $cedula = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    // Consulta para verificar las credenciales en la tabla "usuarios"
    $query = "SELECT * FROM usuarios WHERE cedula = ? AND contrasena = ?";
    
    // Preparar la consulta
    $stmt = mysqli_prepare($conexion, $query);
    
    // Vincular los parámetros a la consulta
    mysqli_stmt_bind_param($stmt, "ss", $cedula, $contrasena);
    
    // Ejecutar la consulta
    mysqli_stmt_execute($stmt);
    
    // Obtener el resultado
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) > 0) {
        // Inicio de sesión exitoso
        session_start();
        $_SESSION['usuario'] = $cedula;
        header("Location: index.html");
        exit();
    } else {
        // Credenciales incorrectas
        echo "<h1>Error</h1>";
        echo "<p>La cédula <b>" . htmlspecialchars($cedula) . "</b> no existe o la contraseña es incorrecta.</p>";
        echo "<p><a href='login.html'>Volver al inicio de sesión</a></p>";
    }

    // Cerrar la conexión
    mysqli_stmt_close($stmt);
    mysqli_close($conexion);
} else {
    echo "Error: Acceso no permitido.";
}
?>
