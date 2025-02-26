<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Números con While</title>
</head>
<body>
    <ul>
        <?php
        $contador = 1;
        while ($contador <= 10) {
            echo "<li>$contador</li>";
            $contador++;
        }
        ?>
    </ul>
</body>
</html>
