<?php
session_start(); // Iniciar la sesión si aún no se ha iniciado

// Destruir todas las variables de sesión
$_SESSION = array();

// Borrar la cookie de sesión si existe
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time() - 3600, '/');
}

// Finalmente, destruir la sesión
session_destroy();

// Redirigir al formulario de inicio de sesión o a otra página
header("Location: index.html");
exit();
?>
