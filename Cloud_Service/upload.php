<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Subir Archivo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h2>Subir Archivo</h2>
    <form action="subir_archivo.php" method="post" enctype="multipart/form-data">
        <input type="file" name="archivo" required>
        <input type="submit" value="Subir">
    </form>
    <a href="dashboard.php">← Volver al panel</a>
</div>
</body>
</html>