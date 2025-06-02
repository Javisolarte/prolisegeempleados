<?php
// Mostrar todos los errores (para depuración)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Incluir el archivo de configuración de la base de datos 
include "db_config.php";

// Verificar que se recibió una solicitud POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $cedula = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    // Consulta para verificar las credenciales y obtener el rol
    $query = "SELECT rol FROM usuarios WHERE cedula = ? AND contrasena = ?";
    
    // Preparar la consulta
    $stmt = mysqli_prepare($conexion, $query);
    
    if ($stmt === false) {
        die("Error al preparar la consulta: " . mysqli_error($conexion));
    }

    // Vincular los parámetros
    mysqli_stmt_bind_param($stmt, "ss", $cedula, $contrasena);
    
    // Ejecutar la consulta
    mysqli_stmt_execute($stmt);
    
    // Obtener el resultado
    $result = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($result)) {
        // Inicio de sesión exitoso
        session_start();
        $_SESSION['usuario'] = $cedula;
        $_SESSION['rol'] = $row['rol']; // Guardar el rol en sesión si lo necesitas

        // Redireccionar según el rol
        if ($row['rol'] === 'administrador') {
            header("Location: index-admin.php");
        } elseif ($row['rol'] === 'usuario') {
            header("Location: index-user.php");
        } else {
            echo "Rol no reconocido.";
        }

        exit();
    } else {
        // Credenciales incorrectas
        echo "<h1>Error</h1>";
        echo "<p>La cédula <b>" . htmlspecialchars($cedula) . "</b> no existe o la contraseña es incorrecta.</p>";
        echo "<p><a href='login.html'>Volver al inicio de sesión</a></p>";
    }

    // Cerrar conexión
    mysqli_stmt_close($stmt);
    mysqli_close($conexion);
} else {
    echo "Error: Acceso no permitido.";
}
?>
