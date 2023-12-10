<?php
// Veritabanı bağlantısı
include("db_connection.php");

// Session başlat
session_start();

// Kullanıcı oturumu kontrolü
if (!isset($_SESSION['username'])) {
    // Oturum yoksa login sayfasına yönlendir
    header("Location: login.php");
    exit();
}

// Kullanıcının adını al
$username = $_SESSION['username'];

// Gönderi ekleme işlemi
if (isset($_POST['submit_post'])) {
    $post_content = $_POST['post_content'];

    // Gönderiyi veritabanına ekleme işlemi
    $insert_post_query = "INSERT INTO posts (username, content) VALUES ('$username', '$post_content')";
    mysqli_query($conn, $insert_post_query);
}

// Yorum ekleme işlemi
if (isset($_POST['submit_comment'])) {
    $comment_content = $_POST['comment_content'];
    $post_id = $_POST['post_id'];

    // Yorumu veritabanına ekleme işlemi
    $insert_comment_query = "INSERT INTO comments (post_id, username, content) VALUES ('$post_id', '$username', '$comment_content')";
    mysqli_query($conn, $insert_comment_query);
}

// Gönderileri listeleme
$posts_query = "SELECT * FROM posts";
$posts_result = mysqli_query($conn, $posts_query);

if ($posts_result) {
    while ($post = mysqli_fetch_assoc($posts_result)) {
        echo "<p>{$post['content']}</p>";

        // Gönderiye yorumları listeleme
        $post_id = $post['id'];
        $comments_query = "SELECT * FROM comments WHERE post_id='$post_id'";
        $comments_result = mysqli_query($conn, $comments_query);

        if ($comments_result) {
            while ($comment = mysqli_fetch_assoc($comments_result)) {
                echo "<p>-- {$comment['username']}: {$comment['content']}</p>";
            }
        } else {
            echo "Yorumları getirirken bir hata oluştu.";
        }

        // Yorum ekleme formu
        echo "
        <form method='post' action=''>
            <label for='comment_content'>Add Comment:</label>
            <input type='hidden' name='post_id' value='$post_id'>
            <input type='text' name='comment_content'>
            <button type='submit' name='submit_comment'>Add Comment</button>
        </form>
        ";

        echo "<hr>";
    }
} else {
    echo "Gönderileri getirirken bir hata oluştu.";
}

// Veritabanı bağlantısını kapat
mysqli_close($conn);
?>
