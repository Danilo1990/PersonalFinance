<?php
$host = 'localhost';
$dbname = 'local';
$user = 'root';
$pass = 'root';

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}
?>