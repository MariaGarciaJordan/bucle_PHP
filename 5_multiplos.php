<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Múltiplos de 3</title>
</head>
<body>
    <h1>Múltiplos de 3 del 1 al 300</h1>
    <ul>
        <?php
        for ($i = 1; $i <= 300; $i++) {
            if ($i % 3 == 0) {
                echo "<li>$i</li>";
            }
        }
        ?>
    </ul>
</body>
</html>
