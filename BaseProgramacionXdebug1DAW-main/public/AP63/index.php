<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblicoteca-Crud</title>
</head>
<body>
    
</body>
</html>
<?php
require_once "C:/0HIJO/0DAW/0SUBJECTS/PROGRAMACÓN/zGuardado/BaseProgramacionXdebug1DAW-main/public/AP63/class/revista.php";

$libro = new Libro('1984', 'George Owell', 1949, 380);
$publicacion = new Publicacion('Toque de queda', 'pedro sanchez', 2021);
$revista = new Revista('VOGUE', 'Anna Wintour', 1892, 35, 'Moda');
