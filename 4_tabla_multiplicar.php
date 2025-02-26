<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tabla de Multiplicar del 7</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color:rgb(145, 179, 224);
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Número</th>
            <th>Resultado</th>
        </tr>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            $resultado = 7 * $i;
            echo "<tr><td>7 x $i</td><td>$resultado</td></tr>";
        }
        ?>
    </table>
</body>
</html>
