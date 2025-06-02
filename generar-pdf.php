<?php
require_once 'db_config.php';
require_once 'dompdf/autoload.inc.php';


use Dompdf\Dompdf;
use Dompdf\Options;

$options = new Options();
$options->set('isHtml5ParserEnabled', true);
$options->set('defaultFont', 'Helvetica');

$dompdf = new Dompdf($options);

// Obtener datos de empleados
$sql = "SELECT 
            e.nombre, 
            e.cedula, 
            e.fecha_nacimiento, 
            e.experiencia, 
            e.puesto_asignado,
            l.nombre AS lugar_nombre,
            l.telefono AS lugar_telefono
        FROM empleados e
        LEFT JOIN lugares_seguridad l ON e.puesto_asignado = l.id_lugar";

$resultado = $conexion->query($sql);

$html = '<h1 style="text-align:center;">Lista de Empleados</h1><hr>';

if ($resultado && $resultado->num_rows > 0) {
    while ($empleado = $resultado->fetch_assoc()) {
        $edad = '';
        if (!empty($empleado['fecha_nacimiento'])) {
            $fecha_nac = new DateTime($empleado['fecha_nacimiento']);
            $hoy = new DateTime();
            $edad = $hoy->diff($fecha_nac)->y . ' años';
        }

        $html .= '
        <div style="margin-bottom: 20px;">
            <strong>Nombre:</strong> ' . htmlspecialchars($empleado['nombre']) . '<br>
            <strong>Cédula:</strong> ' . htmlspecialchars($empleado['cedula']) . '<br>
            <strong>Edad:</strong> ' . $edad . '<br>
            <strong>Experiencia:</strong> ' . htmlspecialchars($empleado['experiencia']) . '<br>
            <strong>Lugar:</strong> ' . htmlspecialchars($empleado['lugar_nombre']) . '<br>
            <strong>Teléfono:</strong> ' . htmlspecialchars($empleado['lugar_telefono']) . '
            <hr>
        </div>';
    }
} else {
    $html .= '<p>No hay empleados registrados.</p>';
}

$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();
$dompdf->stream("empleados.pdf", ["Attachment" => false]);
?>
