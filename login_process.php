<?php
// Veritabanı bağlantısı
include("db_connection.php");

// Form verilerini al
$username = $_POST['username'];
$password = $_POST['password'];

// Kullanıcı doğrulama işlemi
$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) == 1) {
    echo "Giriş başarılı. Hoş geldiniz, $username!";
} else {
    echo "Kullanıcı adı veya şifre hatalı. Lütfen tekrar deneyin.";
}

// Veritabanı bağlantısını kapat
mysqli_close($conn);
?>
