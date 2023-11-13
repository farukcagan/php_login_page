<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Üye Kaydı</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Üye Kaydı</h1>
    <form action="register_process.php" method="post">
        <label for="username">Kullanıcı Adı:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Şifre:</label>
        <input type="password" id="password" name="password" required>

        <label for="email">E-posta:</label>
        <input type="email" id="email" name="email" required>

        <input type="submit" value="Kayıt Ol">
    </form>
</body>
</html>
