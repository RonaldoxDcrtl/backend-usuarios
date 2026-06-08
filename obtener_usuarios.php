<?php

header('Content-Type: application/json');

require_once 'config.php';

$sql = "SELECT id,nombre,email,fecha_registro
        FROM usuarios
        ORDER BY id DESC";

$result = $conn->query($sql);

$usuarios = [];

while($row = $result->fetch_assoc()){
    $usuarios[] = $row;
}

echo json_encode([
    "success" => true,
    "data" => $usuarios
]);

$conn->close();
?>
