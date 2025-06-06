<?php
ob_start();

require 'db_config.php';
require_once 'dompdf/autoload.inc.php';

use Dompdf\Dompdf;
use Dompdf\Options;

$options = new Options();
$options->set('defaultFont', 'Arial');
$dompdf = new Dompdf($options);

// Consulta empleados y lugares
$sql = "SELECT 
            e.*, 
            l.nombre AS lugar_nombre,
            l.telefono AS lugar_telefono
        FROM empleados e
        LEFT JOIN lugares_seguridad l ON e.puesto_asignado = l.id_lugar
        ORDER BY l.nombre, e.nombre";

$resultado = $conexion->query($sql);

// Agrupar por lugar
$lugares = [];

while ($row = $resultado->fetch_assoc()) {
    $lugar = $row['lugar_nombre'] ?? 'No asignado';
    $lugares[$lugar][] = $row;
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Reporte de Empleados</title>
    <style>
        body { font-family: Arial, sans-serif; font-size: 11px; }
        h2, h3 { text-align: center; margin: 0; }
        .lugar-section { page-break-after: always; margin-top: 30px; }
        table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        th, td { border: 1px solid #000; padding: 4px; vertical-align: top; }
        img.foto { width: 50px; height: 50px; object-fit: cover; }
    </style>
</head>
<body>

<h2>Listado de Empleados por Lugar</h2>

<?php
foreach ($lugares as $nombreLugar => $empleados):
    $contador = 1;
?>
    <div class="lugar-section">
        <h3><?php echo htmlspecialchars($nombreLugar); ?> (<?php echo count($empleados); ?> empleados)</h3>

        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Foto</th>
                    <th>Nombre</th>
                    <th>Cédula</th>
                    <th>Edad</th>
                    <th>Dirección</th>
                    <th>Celular</th>
                    <th>Email</th>
                    <th>Género</th>
                    <th>Estado Civil</th>
                    <th>Formación</th>
                    <th>Experiencia</th>
                    <th>Cargo</th>
                    <th>Contrato</th>
                    <th>Sueldo</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($empleados as $emp):
                    // Edad
                    $edad = '';
                    if (!empty($emp['fecha_nacimiento'])) {
                        $fecha_nac = new DateTime($emp['fecha_nacimiento']);
                        $hoy = new DateTime();
                        $edad = $hoy->diff($fecha_nac)->y . ' años';
                    }

                    // Ruta imagen
                    $imgPath = !empty($emp['foto_perfil_ruta']) && file_exists($emp['foto_perfil_ruta']) 
                                ? $emp['foto_perfil_ruta'] 
                                : null;

                    ?>
                    <tr>
                        <td><?php echo $contador++; ?></td>
                        <td>
                            <?php if ($imgPath): ?>
                                <img src="<?php echo $imgPath; ?>" class="foto">
                            <?php else: ?>
                                Sin imagen
                            <?php endif; ?>
                        </td>
                        <td><?php echo htmlspecialchars($emp['nombre']); ?></td>
                        <td><?php echo htmlspecialchars($emp['cedula']); ?></td>
                        <td><?php echo $edad; ?></td>
                        <td><?php echo htmlspecialchars($emp['direccion']); ?></td>
                        <td><?php echo htmlspecialchars($emp['celular']); ?></td>
                        <td><?php echo htmlspecialchars($emp['email']); ?></td>
                        <td><?php echo htmlspecialchars($emp['genero']); ?></td>
                        <td><?php echo htmlspecialchars($emp['estado_civil']); ?></td>
                        <td><?php echo htmlspecialchars($emp['formacion']); ?></td>
                        <td><?php echo htmlspecialchars($emp['experiencia']); ?></td>
                        <td><?php echo htmlspecialchars($emp['cargo']); ?></td>
                        <td><?php echo htmlspecialchars($emp['tipo_contrato']); ?></td>
                        <td><?php echo htmlspecialchars($emp['sueldo']); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<?php endforeach; ?>

</body>
</html>

<?php
$html = ob_get_clean();

$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'portrait'); // Vertical
$dompdf->render();
$dompdf->stream("reporte_empleados_por_lugar.pdf", ["Attachment" => false]);
exit;
