<?php
$hostname = "localhost";
$username = "admin_cristian";
$password = "caqp.,.2991";
$database = "el_remanso";
$conn = new mysqli($hostname, $username, $password, $database);
$acentos = $conn->query("SET NAMES 'utf8'");
if ($conn ->connect_error) {
die('Error de Conexión (' . $conn->connect_errno . ') ' . $conn->connect_error);
}
?>