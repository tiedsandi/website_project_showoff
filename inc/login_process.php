<?php
// Koneksi ke database (gantilah dengan detail koneksi Anda)
$conn = new mysqli("localhost", "username", "password", "nama_database");

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari formulir
$username = $_POST['email'];
$password = $_POST['password'];

// Query untuk memeriksa username dan password
$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Login berhasil
    session_start();
    $_SESSION['username'] = $username;
    header("Location: index.php"); // Alihkan ke halaman index
} else {
    // Login gagal
    echo "Username atau password salah.";
}

$conn->close();
?>