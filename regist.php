<?php 

// Memanggil koneksi database 
require "koneksi.php"; 

// Mengambil data dari form 
$nama = $_POST["nama"]; 
$nim = $_POST["nim"]; 
$username = $_POST["username"]; 
$email = $_POST["email"];
$password = $_POST["password"];

// Perintah SQL untuk memasukkan data 
$sql = "INSERT INTO mahasiswa (nama, nim, username, email, password) 
VALUES (?, ?, ?, ?, ?)"; 

// Menyiapkan query 
$stmt = $conn->prepare($sql); 

// Mengikat lima data sebagai string 
$stmt->bind_param("sssss", $nama, $nim, $username, $email, $password); 

// Menjalankan query 
if ($stmt->execute()) { 
echo "Register Berhasil"; 
echo "<br><br>"; 
echo "<a href='login.html'>Login</a>"; 
} else { 
echo "Register Gagal: " . $stmt->error; 
} 

// Menutup query 
$stmt->close(); 
 
// Menutup koneksi 
$conn->close(); 
 
?> 