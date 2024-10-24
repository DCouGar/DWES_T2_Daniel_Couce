<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Triangulos</title>
</head>
<body>
    <?php

    use clases\TriangleGenerator;

    require("clases/TriangleGenerator.php");

    echo TriangleGenerator::generateTriangle(11);
    ?>
</body>
</html>