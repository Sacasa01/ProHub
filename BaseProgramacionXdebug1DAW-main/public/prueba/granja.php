<!DOCTYPE html>
<html>
<head>
    <title>Granja</title>
</head>
<body>
    <h2>Formulario de Registro</h2>
    <form method="POST" action="register.php">
        <label for="username">Usuario:</label>
        <input type="text" name="username" required><br>
        
        <label for="password">Contraseña:</label>
        <input type="password" name="password" required><br>
        
        <input type="submit" value="Registrarse">
    </form>
<?php
    if ( $_SERVER['REQUEST_METHOD'] == "POST"){
    if (!empty($_POST["name"])&&!empty($_POST["contraseña"]))
    $usuario = $_POST ["name"];
    $contraseña = $_POST ["contraseña"];



    }
?>
</body>
</html>