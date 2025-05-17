<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Estado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h2>Estado del Almacenamiento</h2>
    <p>Espacio estimado usado: 
        <strong>
        <?php
            $total = 0;
            foreach (glob("uploads/*") as $archivo) {
                $total += filesize($archivo);
            }
            echo round($total / (1024 * 1024), 2) . " MB";
        ?>
        </strong>
    </p>
    <a href="dashboard.php">← Volver al panel</a>
</div>
</body>
</html>