<?php

$host = getenv('MYSQLHOST');
$user = getenv('MYSQLUSER');
$pass = getenv('MYSQLPASSWORD');
$db   = getenv('MYSQL_DATABASE');
$port = getenv('MYSQLPORT');

$conn = new mysqli(
    $host,
    $user,
    $pass,
    $db,
    $port
);

if ($conn->connect_error) {
    die(json_encode([
        "success" => false,
        "message" => $conn->connect_error
    ]));
}

$conn->set_charset("utf8mb4");
?>
