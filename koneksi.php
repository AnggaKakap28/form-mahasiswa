<?php 
// Server database 
$host = "localhost"; 
// Username MySQL 
$user = "root"; 
// Password MySQL 
$password = ""; 
// Nama database 
$database = "kampus"; 
// Membuat koneksi 
$conn = new mysqli($host, $user, $password, $database); 
// Mengecek koneksi 
if ($conn->connect_error) { 
// Menampilkan pesan jika koneksi gagal 
die("Koneksi gagal: " . $conn->connect_error); 
} 
// Mengatur karakter database 
$conn->set_charset("utf8mb4"); 
?>