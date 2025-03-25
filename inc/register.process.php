<?php
// Koneksi ke database (gantilah dengan detail koneksi Anda)
$conn = new mysqli("localhost", "username", "password", "nama_database");

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari formulir
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

// Validasi password
if ($password !== $confirm_password) {
    echo "Password dan konfirmasi password tidak cocok.";
    exit();
}

// Hash password sebelum disimpan ke database
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Query untuk memasukkan data pengguna baru
$sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$hashed_password')";

if ($conn->query($sql) === TRUE) {
    echo "Registrasi berhasil.";
    header("Location: login.php"); // Alihkan ke halaman login
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>