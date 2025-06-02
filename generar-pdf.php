<?php
// Iniciar el buffer de salida para evitar errores de cabecera
ob_start();

require 'db_config.php';
require_once 'dompdf/autoload.inc.php';

use Dompdf\Dompdf;
use Dompdf\Options;

// Configurar Dompdf
$options = new Options();
$options->set('defaultFont', 'Arial');
$dompdf = new Dompdf($options);

// Consulta a la base de datos
$sql = "SELECT 
            e.nombre, 
            e.cedula, 
            e.fecha_nacimiento, 
            e.foto_perfil_ruta, 
            e.experiencia, 
            e.puesto_asignado,
            l.nombre AS lugar_nombre,
            l.telefono AS lugar_telefono
        FROM empleados e
        LEFT JOIN lugares_seguridad l ON e.puesto_asignado = l.id_lugar";

$resultado = $conexion->query($sql);

// Construir el HTML del PDF
$html = '<h2 style="text-align: center;">Listado de Empleados</h2>';

if ($resultado && $resultado->num_rows > 0) {
    $html .= '<table border="1" cellpadding="5" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Cédula</th>
                        <th>Edad</th>
                        <th>Experiencia</th>
                        <th>Lugar</th>
                        <th>Teléfono</th>
                    </tr>
                </thead>
                <tbody>';

    while ($empleado = $resultado->fetch_assoc()) {
        // Calcular edad
        $edad = '';
        if (!empty($empleado['fecha_nacimiento'])) {
            $fecha_nac = new DateTime($empleado['fecha_nacimiento']);
            $hoy = new DateTime();
            $edad = $hoy->diff($fecha_nac)->y . ' años';
        }

        // Limpiar campos
        $nombre      = htmlspecialchars($empleado['nombre'] ?? '');
        $cedula      = htmlspecialchars($empleado['cedula'] ?? '');
        $experiencia = htmlspecialchars($empleado['experiencia'] ?? 'Sin especificar');
        $lugar       = htmlspecialchars($empleado['lugar_nombre'] ?? 'No asignado');
        $telefono    = htmlspecialchars($empleado['lugar_telefono'] ?? 'Sin teléfono');

        $html .= "<tr>
                    <td>$nombre</td>
                    <td>$cedula</td>
                    <td>$edad</td>
                    <td>$experiencia</td>
                    <td>$lugar</td>
                    <td>$telefono</td>
                  </tr>";
    }

    $html .= '</tbody></table>';
} else {
    $html .= '<p>No hay empleados registrados.</p>';
}

// Finalizar el buffer antes de enviar encabezados
ob_end_clean();

// Generar el PDF
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();

// Mostrar el PDF en el navegador
$dompdf->stream("reporte-empleados.pdf", ["Attachment" => false]);
