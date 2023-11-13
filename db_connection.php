<?php
$servername = "localhost";
$username = "root";
$password = "1234";
$database = "your_database_name";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
}
?>
