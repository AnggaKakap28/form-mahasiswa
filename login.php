<?php

require "koneksi.php";

$username = $_POST["username"];
$password = $_POST["password"];

$sql = "SELECT username, password FROM mahasiswa WHERE username = ?";

$stmt = $conn->prepare($sql);

$stmt->bind_param("s", $username);

$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 1) {
    $data = $result->fetch_assoc();

    if (password_verify($password, $data['password']) || $password == $data['password']) {
    echo "Selamat datang, " . $data["username"];
    } else{
        echo "Nama atau Password salah.";
    }
} else {
    echo "User belum terdaftar.";
}

$stmt->close();
$conn->close();
?>