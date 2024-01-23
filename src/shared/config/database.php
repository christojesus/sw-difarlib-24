<?php
$conn = new mysqli("localhost", "root", "", "dbpedidos");
$conn->set_charset("utf8");

if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}
