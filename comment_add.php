<?php
// Veritabanı bağlantısı
include("db_connection.php");

// Form verilerini al
$comment = $_POST['comment'];

// Yorum ekleme işlemi
$query = "INSERT INTO comments (comment_text) VALUES ('$comment')";
$result = mysqli_query($conn, $query);

if ($result) {
    echo "Yorum başarıyla eklendi.";
} else {
    echo "Yorum eklenirken bir hata oluştu. Lütfen tekrar deneyin.";
}

// Veritabanı bağlantısını kapat
mysqli_close($conn);
?>
