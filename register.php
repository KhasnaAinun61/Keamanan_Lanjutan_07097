<?php
require_once 'config.php';
require_once 'db.php';

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($nama) || empty($username) || empty($password)) {
        $message = "Semua kolom wajib diisi!";
    } else {
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);
        $stmt = $koneksi->prepare("INSERT INTO users (nama, username, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $nama, $username, $hashed_password);

        try {
            $stmt->execute();
            header("Location: login.php?registered=1");
            exit;
        } catch (mysqli_sql_exception $e) {
            if (str_contains($e->getMessage(), "Duplicate entry")) {
                $message = "Username sudah digunakan. Silakan pilih yang lain.";
            } else {
                $message = "Terjadi kesalahan: " . $e->getMessage();
            }
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registrasi</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <div class="container">
        <h2>Formulir Registrasi</h2>

        <?php if ($message): ?>
            <p class="<?php echo str_contains($message, 'berhasil') ? 'success' : 'error'; ?>">
                <?php echo $message; ?>
            </p>
        <?php endif; ?>

        <form method="post">
            <label>Nama:</label>
            <input type="text" name="nama" required>
            <label>Username:</label>
            <input type="text" name="username" required>
            <label>Password:</label>
            <input type="password" name="password" required>
            <input type="submit" value="Daftar">
        </form>

        <p class="text-center">Sudah punya akun? <a href="login.php">Login di sini</a></p>
    </div>
</body>
</html>
