# Keamananlanjutan_07088

Proyek ini merupakan implementasi sistem login dan registrasi sederhana dengan pengamanan lanjutan menggunakan PHP dan MySQL, sebagai bagian dari tugas mata kuliah Pemrograman Web Dasar.

---

## 📌 Fitur Utama

- ✅ Registrasi pengguna dengan password hash (bcrypt)
- ✅ Login aman menggunakan prepared statement
- ✅ Pembatasan login maksimal (Brute Force Protection)
- ✅ Flash message saat registrasi berhasil (hilang otomatis)
- ✅ Validasi input dasar
- ✅ Session management untuk dashboard
- ✅ Logout aman
- ✅ Tampilan modern & responsif dengan CSS sederhana

---

## 🛠️ Teknologi

- PHP
- MySQL
- HTML & CSS
- Apache (via XAMPP)

---

## 📁 Struktur Folder
    Keamananlanjutan_07088/
    │
    ├── assets/
    │ └── style.css 
    ├── config.php 
    ├── db.php 
    ├── index.php 
    ├── login.php 
    ├── register.php 
    ├── dashboard.php 
    ├── logout.php 
    └── README.md 


---

## 🔒 Keamanan yang Diterapkan

    - Password Hashing: Menggunakan `password_hash()` dan `password_verify()`
    - Prepared Statements: Mencegah SQL Injection
    - Brute Force Protection: Maksimal 5 kali percobaan login salah, blok 5 menit
    - Session Protection: Validasi login dengan `$_SESSION`
    - Flash Message: Pesan info muncul sementara, tidak menetap
    - Error Handling: Tidak menampilkan pesan error mentah ke user

---

## 🚀 Cara Menjalankan

1. Clone / ekstrak folder ini ke `htdocs/` (jika pakai XAMPP)
2. Buat database baru dengan nama: `keamanan`
3. Import file `keamanan.sql` yang disediakan
4. Jalankan Apache & MySQL di XAMPP
5. Buka browser dan akses: http://localhost/Keamanan/ 

---

## 👨‍🎓 Informasi Tugas

    - Nama Mahasiswa: Khasna Fadhilah Ainun Jamil  
    - NIM: A12.2023.07097 
    - Mata Kuliah: Pemrograman Web Dasar 

---
