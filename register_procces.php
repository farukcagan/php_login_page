<?php
// Veritabanı bağlantısı
include("db_connection.php");

// Form verilerini al
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

// Veritabanına ekleme sorgusu
$query = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";
$result = mysqli_query($conn, $query);

if ($result) {
    echo "Üye kaydı başarıyla tamamlandı. Hoş geldiniz, $username!";
} else {
    echo "Üye kaydı sırasında bir hata oluştu. Lütfen tekrar deneyin.";
}

// Veritabanı bağlantısını kapat
mysqli_close($conn);
?>
