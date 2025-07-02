<?php
require_once 'config.php';

// Cek apakah user sudah login
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <div class="container">
        <h2>Selamat Datang, <?php echo htmlspecialchars($_SESSION['nama']); ?>!</h2>
        <p style="text-align: center; margin-bottom: 20px;">
            Kamu telah berhasil login ke sistem dengan aman.
        </p>
        <form action="logout.php" method="post" style="text-align: center;">
            <button type="submit">Logout</button>
        </form>
    </div>
</body>
</html>
