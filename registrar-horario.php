<?php
include 'db_config.php'; // conexión con $conexion

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mes = $_POST['mes'];
    $anio = date("Y"); // Año actual
    $fecha_subida = date("Y-m-d H:i:s"); // Fecha actual

    if (isset($_FILES['archivo']) && $_FILES['archivo']['error'] === UPLOAD_ERR_OK) {
        $archivoTmp = $_FILES['archivo']['tmp_name'];
        $nombreOriginal = $_FILES['archivo']['name'];
        $extension = pathinfo($nombreOriginal, PATHINFO_EXTENSION);

        // Nombre nuevo del archivo: horario_mes_año.ext
        $nombreNuevo = "horario_" . strtolower($mes) . "_" . $anio . "." . $extension;
        $rutaDestino = "horarios/" . $nombreNuevo;

        // Mover archivo a la carpeta "horarios"
        if (move_uploaded_file($archivoTmp, $rutaDestino)) {
            // Insertar en la base de datos
            $stmt = $conexion->prepare("INSERT INTO horarios (mes, ruta_horario, fecha_subida) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $mes, $rutaDestino, $fecha_subida);

            if ($stmt->execute()) {
                echo "<script>alert('Horario subido correctamente'); window.location.href='nombre-pagina-retorno.php';</script>";
            } else {
                echo "Error al guardar en la base de datos: " . $stmt->error;
            }

            $stmt->close();
        } else {
            echo "Error al mover el archivo.";
        }
    } else {
        echo "No se seleccionó un archivo válido.";
    }
} else {
    echo "Método no permitido.";
}
?>
