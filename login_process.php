<?php
// Veritabanı bağlantısı
include("db_connection.php");

// Session başlat
session_start();

// Form verilerini al
$username = $_POST['username'];
$password = $_POST['password'];

// Kullanıcı doğrulama işlemi
$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) == 1) {
    // Giriş başarılıysa oturumu başlat
    $_SESSION['username'] = $username;

    echo "Giriş başarılı. Hoş geldiniz, $username!";
    header("refresh:3;url=form_page.php"); 
} else {
    echo "Kullanıcı adı veya şifre hatalı. Lütfen tekrar deneyin.";
    header("refresh:3;url=login.php"); 
}

// Veritabanı bağlantısını kapat
mysqli_close($conn);
?>
