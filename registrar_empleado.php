<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'db_config.php'; // Define $conn

// Carpetas de destino
$carpetaHojasDeVida = "hojasdevida/";
$carpetaFotos = "fotos/";

// Crear carpetas si no existen
if (!file_exists($carpetaHojasDeVida)) mkdir($carpetaHojasDeVida, 0777, true);
if (!file_exists($carpetaFotos)) mkdir($carpetaFotos, 0777, true);

// Recoger datos del formulario
$nombre = strtoupper(trim($_POST['nombre']));
$cedula = $_POST['cedula'];
$direccion = $_POST['direccion'];
$celular = $_POST['celular'];
$email = $_POST['email'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$genero = $_POST['genero'];
$estado_civil = $_POST['estado_civil'];
$formacion = $_POST['formacion'];
$experiencia = $_POST['experiencia'];
$puesto_asignado = $_POST['puesto_asignado'];
$tipo_contrato = $_POST['tipo_contrato'];
$sueldo = $_POST['sueldo'];
$fecha_ingreso = $_POST['fecha_ingreso'];
$estado = $_POST['estado'];
$observaciones = $_POST['observaciones'];

// Validar que no esté registrada la cédula
$verificaSql = "SELECT id FROM empleados WHERE cedula = ?";
$verificaStmt = $conn->prepare($verificaSql);
$verificaStmt->bind_param("s", $cedula);
$verificaStmt->execute();
$verificaStmt->store_result();

if ($verificaStmt->num_rows > 0) {
    echo "Error: La cédula '$cedula' ya está registrada.";
    exit;
}
$verificaStmt->close();

// Procesar hoja de vida
$hoja_vida_ruta = NULL;
if (isset($_FILES['hoja_vida_ruta']) && $_FILES['hoja_vida_ruta']['error'] == 0) {
    $ext = pathinfo($_FILES['hoja_vida_ruta']['name'], PATHINFO_EXTENSION);
    $nombre_archivo_cv = "cv_" . $cedula . "." . $ext;
    $ruta_cv = $carpetaHojasDeVida . $nombre_archivo_cv;

    if (move_uploaded_file($_FILES['hoja_vida_ruta']['tmp_name'], $ruta_cv)) {
        $hoja_vida_ruta = $ruta_cv;
    } else {
        die("Error al subir la hoja de vida.");
    }
}

// Procesar foto de perfil
$foto_perfil_ruta = NULL;
if (isset($_FILES['foto_perfil_ruta']) && $_FILES['foto_perfil_ruta']['error'] == 0) {
    $ext = pathinfo($_FILES['foto_perfil_ruta']['name'], PATHINFO_EXTENSION);
    $nombre_archivo_foto = "foto_" . $cedula . "." . $ext;
    $ruta_foto = $carpetaFotos . $nombre_archivo_foto;

    if (move_uploaded_file($_FILES['foto_perfil_ruta']['tmp_name'], $ruta_foto)) {
        $foto_perfil_ruta = $ruta_foto;
    } else {
        die("Error al subir la foto de perfil.");
    }
}

// Insertar en la base de datos
$sql = "INSERT INTO empleados (
    nombre, cedula, direccion, celular, email, fecha_nacimiento, genero, estado_civil,
    formacion, experiencia, puesto_asignado, tipo_contrato, sueldo, fecha_ingreso,
    hoja_vida_ruta, foto_perfil_ruta, estado, observaciones
) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param(
    "ssssssssssssdsssss",
    $nombre, $cedula, $direccion, $celular, $email, $fecha_nacimiento, $genero, $estado_civil,
    $formacion, $experiencia, $puesto_asignado, $tipo_contrato, $sueldo, $fecha_ingreso,
    $hoja_vida_ruta, $foto_perfil_ruta, $estado, $observaciones
);

if ($stmt->execute()) {
    echo "<script>
        var respuesta = confirm('¿Deseas agregar otro empleado?');
        if (respuesta) {
            window.location.href = 'agregar_empleado.html';
        } else {
            alert('Empleado registrado exitosamente.');
            window.location.href = 'todos-empleados.html'; // Cambia por la página de destino final
        }
    </script>";
} else {
    echo "Error al guardar en la base de datos: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
