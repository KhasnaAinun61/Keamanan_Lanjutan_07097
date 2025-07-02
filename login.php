<?php
require_once 'config.php';
require_once 'db.php';

$error = '';

// Inisialisasi percobaan login
if (!isset($_SESSION['login_attempts'])) {
    $_SESSION['login_attempts'] = 0;
    $_SESSION['last_attempt_time'] = time();
}

// Cek apakah diblokir karena terlalu banyak login salah
if ($_SESSION['login_attempts'] >= MAX_LOGIN_ATTEMPT) {
    $remaining = BLOCK_TIME - (time() - $_SESSION['last_attempt_time']);
    if ($remaining > 0) {
        $error = "Terlalu banyak percobaan login. Coba lagi dalam $remaining detik.";
    } else {
        $_SESSION['login_attempts'] = 0;
    }
}

// Proses login
if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($error)) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $koneksi->prepare("SELECT id, nama, password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['nama'] = $user['nama'];
        $_SESSION['login_attempts'] = 0;
        header("Location: dashboard.php");
        exit;
    } else {
        $_SESSION['login_attempts']++;
        $_SESSION['last_attempt_time'] = time();
        $error = "Username atau password salah";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <div class="container">
        <h2>Login</h2>

        <!-- message registrasi berhasil -->
        <?php if (isset($_GET['registered']) && $_GET['registered'] == 1): ?>
        <div id="flash-message" class="info">Registrasi berhasil! Silakan login.</div>
        <script>
            setTimeout(() => {
                const msg = document.getElementById("flash-message");
                if (msg) msg.style.display = "none";
            }, 3000);

            if (window.location.search.includes('registered=1')) {
                const url = new URL(window.location);
                url.searchParams.delete('registered');
                window.history.replaceState({}, document.title, url.pathname);
            }
        </script>
        <?php endif; ?>

        <!-- Pesan salah login -->
        <?php if ($error): ?>
            <p class="error"><?php echo $error; ?></p>
        <?php endif; ?>

        <form method="post">
            <label>Username:</label>
            <input type="text" name="username" required>

            <label>Password:</label>
            <input type="password" name="password" required>

            <input type="submit" value="Login">
        </form>

        <p class="text-center">Belum punya akun? <a href="register.php">Daftar di sini</a></p>
    </div>
</body>
</html>
