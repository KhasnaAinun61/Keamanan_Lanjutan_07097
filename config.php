<?php
session_start(); // Aktifkan session

// URL dasar aplikasi (ganti jika hosting online)
define("BASE_URL", "http://localhost/KeamananLanjutan_07088/");

// Pengaturan keamanan login
define("MAX_LOGIN_ATTEMPT", 5);  // Maksimal 5 kali salah login
define("BLOCK_TIME", 300);       // Blokir selama 300 detik (5 menit)

// Zona waktu default
date_default_timezone_set('Asia/Jakarta');
?>