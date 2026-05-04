<!DOCTYPE html>
<html>
<head>
    <title>Daftar Akun Baru</title>
</head>
<body>
    <h2>Sign Up</h2>
    <form action="proses_signup.php" method="POST">
        <p>Nama Lengkap: <input type="text" name="nama_lengkap" required></p>
        <p>Username: <input type="text" name="username" required></p>
        <p>Password: <input type="password" name="password" required></p>
        <button type="submit" name="signup">Daftar</button>
    </form>
    <p>Sudah punya akun? <a href="login.php">Login di sini</a></p>
</body>
</html>