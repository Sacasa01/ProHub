<?php
require_once "autoloader.php";
$connection = new Connection();
?>

<html>

<head>
    <title>Welcome to LAMP Infrastructure</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container-fluid">
        <?php
        echo "<h1>Hello, Welcome DAW Student!</h1>";
        echo "<h2>pdo example</h2>";

        // Ejemplo de inserción directa
        /*$insert = "INSERT INTO Person(id, name) VALUES (333, 'NombrePrueba3')";
            $result = $connection->getConn()->exec($insert);*/

        // Ejemplo de prepared statement
        // $stmt = $connection->getConn()->prepare('INSERT INTO Person(id, name) VALUES (?, ?)');
        // $id = 444;
        // $name = "NombrePrueba4";
        // $stmt->execute([$id, $name]);

        // Consulta de datos
        $query = 'SELECT * FROM Person';
        $result = $connection->getConnection()->query($query);

        echo '<table class="table table-striped">';
        echo '<tr><thead><th>id</th><th>name</th></tr></thead>';
        while ($value = $result->fetch(PDO::FETCH_ASSOC)) {
            echo '<tr>';
            foreach ($value as $element) {
                echo '<td>' . $element . '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
        ?>
    </div>
</body>

</html>