<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Üye Girişi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Üye Girişi</h1>
    <form action="login_process.php" method="post">
        <label for="username">Kullanıcı Adı:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Şifre:</label>
        <input type="password" id="password" name="password" required>

        <input type="submit" value="Giriş Yap">
    </form>
</body>
</html>
