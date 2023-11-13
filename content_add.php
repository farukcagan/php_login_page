<?php
// Veritabanı bağlantısı
include("db_connection.php");

// Form verilerini al
$content = $_POST['content'];

// İçerik ekleme işlemi
$query = "INSERT INTO content (content_text) VALUES ('$content')";
$result = mysqli_query($conn, $query);

if ($result) {
    echo "İçerik başarıyla eklendi.";
} else {
    echo "İçerik eklenirken bir hata oluştu. Lütfen tekrar deneyin.";
}

// Veritabanı bağlantısını kapat
mysqli_close($conn);
?>
