<?php
$servername = "localhost:3308";
$username = "root";
$password = "";
$database = "mysql"; 

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
}

?>
