<?php
$servername = "139.177.204.53";
$username = "root";
$password = "root";
$dbname = "paginaweb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$sql = "SELECT * FROM productos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>Id</th>
                <th>Nombre_producto</th>
                <th>Descripcion</th>
                <th>Stock</th>
            </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["nombre_producto"] . "</td>
                <td>" . $row["descripcion"] . "</td>
                <td>" . $row["stock"] . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "0 resultados";
}
$conn->close();
?>
