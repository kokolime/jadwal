<?php
// Konfigurasi Database
$host     = "localhost";
$username = "root";         // Username default XAMPP
$password = "";             // Password default XAMPP (kosong)
$database = "jadwal";

// Membuat Koneksi
$conn = mysqli_connect($host, $username, $password, $database);
// Cek Koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
// Set charset ke utf8 agar karakter khusus terbaca dengan baik
mysqli_set_charset($conn, "utf8");
?>