<?php
ob_start();

require 'db_config.php';
require_once 'dompdf/autoload.inc.php';

use Dompdf\Dompdf;
use Dompdf\Options;

// Obtener todos los lugares
$sqlLugares = "SELECT * FROM lugares_seguridad ORDER BY nombre ASC";
$resultLugares = $conexion->query($sqlLugares);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Reporte General de Lugares y Empleados</title>
    <style>
        body { font-family: Arial, sans-serif; font-size: 11px; }
        h2, h3 { text-align: center; }
        table { width: 100%; border-collapse: collapse; margin-bottom: 20px; }
        th, td { border: 1px solid #000; padding: 6px; text-align: left; }
        .lugar-section { page-break-after: always; }
    </style>
</head>
<body>

<h2>Reporte General de Lugares de Seguridad</h2>

<?php
if ($resultLugares->num_rows > 0):
    while ($lugar = $resultLugares->fetch_assoc()):
        $idLugar = $lugar['id_lugar'];
?>
    <div class="lugar-section">
        <h3><?php echo htmlspecialchars($lugar['nombre']); ?></h3>

        <table>
            <tr><th>Dirección</th><td><?php echo htmlspecialchars($lugar['direccion']); ?></td></tr>
            <tr><th>Teléfono</th><td><?php echo htmlspecialchars($lugar['telefono']); ?></td></tr>
            <tr><th>Cámaras</th><td><?php echo htmlspecialchars($lugar['numero_camaras']); ?></td></tr>
            <tr><th>Guardias</th><td><?php echo htmlspecialchars($lugar['numero_guardias']); ?></td></tr>
            <tr><th>Registrado</th><td><?php echo htmlspecialchars($lugar['created_at']); ?></td></tr>
        </table>

        <h4>Guardias Asignados</h4>
        <?php
        $stmtEmp = $conexion->prepare("SELECT * FROM empleados WHERE puesto_asignado = ?");
        $stmtEmp->bind_param("i", $idLugar);
        $stmtEmp->execute();
        $resultEmp = $stmtEmp->get_result();
        ?>

        <?php if ($resultEmp->num_rows > 0): ?>
            <table>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Cédula</th>
                        <th>Teléfono</th>
                        <th>Correo</th>
                        <th>Dirección</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($emp = $resultEmp->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($emp['nombre']); ?></td>
                            <td><?php echo htmlspecialchars($emp['cedula']); ?></td>
                            <td><?php echo htmlspecialchars($emp['celular']); ?></td>
                            <td><?php echo htmlspecialchars($emp['email']); ?></td>
                            <td><?php echo htmlspecialchars($emp['direccion']); ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>No hay empleados asignados a este lugar.</p>
        <?php endif; ?>
    </div>
<?php
    endwhile;
else:
    echo "<p>No hay lugares registrados.</p>";
endif;
?>

</body>
</html>

<?php
$html = ob_get_clean();

// Configurar Dompdf
$options = new Options();
$options->set('defaultFont', 'Arial');
$dompdf = new Dompdf($options);

$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();

// Descargar el PDF en el navegador
$dompdf->stream("reporte_general_lugares.pdf", ["Attachment" => false]);
exit;
?>
