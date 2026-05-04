<!DOCTYPE html>
<html>
<head>
    <title>Login Sistem Buku</title>
</head>
<body>
    <h2>Login</h2>
    <form action="proses_login.php" method="POST">
        <p>Username: <input type="text" name="username" required></p>
        <p>Password: <input type="password" name="password" required></p>
        <button type="submit" name="login">Masuk</button>
    </form>
    <p>Belum punya akun? <a href="signup.php">Daftar di sini</a></p>
</body>
</html>