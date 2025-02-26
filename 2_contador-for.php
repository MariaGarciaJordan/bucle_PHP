<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Números</title>
</head>
<body>
    <ul>
        <?php
        for ($contador = 1; $contador <= 10; $contador++) {
            echo "<li>$contador</li>";
        }
        ?>
    </ul>
</body>
</html>
