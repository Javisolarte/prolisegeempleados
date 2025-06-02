<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once 'db_config.php';

$carpetaHojasDeVida = "hojasdevida/";
$carpetaFotos = "fotos/";

if (!file_exists($carpetaHojasDeVida)) mkdir($carpetaHojasDeVida, 0777, true);
if (!file_exists($carpetaFotos)) mkdir($carpetaFotos, 0777, true);

// VALIDAR CAMPOS OBLIGATORIOS
if (!isset($_POST['cedula']) || trim($_POST['cedula']) == '') {
    die("Error: la cédula es obligatoria.");
}

$cedula = trim($_POST['cedula']);

// 1. VERIFICAR SI YA EXISTE
$stmtCheck = $conexion->prepare("SELECT id FROM empleados WHERE cedula = ?");
$stmtCheck->bind_param("s", $cedula);
$stmtCheck->execute();
$stmtCheck->store_result();

if ($stmtCheck->num_rows > 0) {
    $stmtCheck->close();
    die("Error: Ya existe un empleado con la cédula '$cedula'.");
}
$stmtCheck->close();

// 2. RECOGER LOS DEMÁS DATOS
$nombre = strtoupper(trim($_POST['nombre'] ?? ''));
$direccion = $_POST['direccion'] ?? null;
$celular = $_POST['celular'] ?? null;
$email = $_POST['email'] ?? null;
$fecha_nacimiento = $_POST['fecha_nacimiento'] ?? null;
$genero = $_POST['genero'] ?? null;
$estado_civil = $_POST['estado_civil'] ?? null;
$formacion = $_POST['formacion'] ?? null;
$experiencia = $_POST['experiencia'] ?? null;
$puesto_asignado = $_POST['puesto_asignado'] ?? null;
$cargo = $_POST['cargo'] ?? null;
$tipo_contrato = $_POST['tipo_contrato'] ?? 'Indefinido';
$sueldo = trim($_POST['sueldo'] ?? ''); // AHORA ES STRING
$fecha_ingreso = $_POST['fecha_ingreso'] ?? null;
$estado = $_POST['estado'] ?? 'Activo';
$observaciones = $_POST['observaciones'] ?? null;

// 3. PROCESAR ARCHIVOS
$hoja_vida_ruta = null;
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

$foto_perfil_ruta = null;
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

// 4. INSERTAR EN BASE DE DATOS (sueldo tipo string ahora)
$sql = "INSERT INTO empleados (
    nombre, cedula, direccion, celular, email, fecha_nacimiento, genero, estado_civil,
    formacion, experiencia, puesto_asignado, cargo, tipo_contrato, sueldo, fecha_ingreso,
    hoja_vida_ruta, foto_perfil_ruta, estado, observaciones
) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conexion->prepare($sql);
$stmt->bind_param(
    "sssssssssssssssssss",
    $nombre, $cedula, $direccion, $celular, $email, $fecha_nacimiento, $genero, $estado_civil,
    $formacion, $experiencia, $puesto_asignado, $cargo, $tipo_contrato, $sueldo, $fecha_ingreso,
    $hoja_vida_ruta, $foto_perfil_ruta, $estado, $observaciones
);

if ($stmt->execute()) {
    $stmt->close();
    $conexion->close();
    header("Location: todos-empleados.php?registrado=1");
    exit;
} else {
    echo "Error al guardar en la base de datos: " . $stmt->error;
    $stmt->close();
    $conexion->close();
}
?>
