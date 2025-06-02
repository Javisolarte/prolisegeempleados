
<?php
require 'db_config.php';
require_once 'dompdf/autoload.inc.php';

use Dompdf\Dompdf;
use Dompdf\Options;

// Configurar Dompdf
$options = new Options();
$options->set('defaultFont', 'Arial');
$dompdf = new Dompdf($options);

// Capturar salida para evitar "headers already sent"
ob_start();

// Consulta
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

// HTML inicial
echo '<h1 style="text-align:center;">Listado de Empleados</h1>';

if ($resultado && $resultado->num_rows > 0) {
    echo '<table border="1" cellspacing="0" cellpadding="5" width="100%">
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

        // Escapar datos con fallback
        $nombre     = htmlspecialchars($empleado['nombre'] ?? '');
        $cedula     = htmlspecialchars($empleado['cedula'] ?? '');
        $experiencia = htmlspecialchars($empleado['experiencia'] ?? 'Sin especificar');
        $lugar      = htmlspecialchars($empleado['lugar_nombre'] ?? 'No asignado');
        $telefono   = htmlspecialchars($empleado['lugar_telefono'] ?? 'Sin teléfono');

        echo "<tr>
                <td>{$nombre}</td>
                <td>{$cedula}</td>
                <td>{$edad}</td>
                <td>{$experiencia}</td>
                <td>{$lugar}</td>
                <td>{$telefono}</td>
              </tr>";
    }

    echo '</tbody></table>';
} else {
    echo '<p>No hay empleados registrados.</p>';
}

// Obtener el HTML final sin enviarlo al navegador
$html = ob_get_clean();

// Cargar HTML en Dompdf
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'portrait');

// Renderizar PDF
$dompdf->render();

// Mostrar en el navegador sin descargar automáticamente
$dompdf->stream("reporte-empleados.pdf", ["Attachment" => false]);
?>
