<?php
// Koneksi ke database (gantilah dengan detail koneksi Anda)
include "../config/koneksi.php";

if ($conn->connect_error) {
    die(json_encode(['status' => 'error', 'message' => 'Koneksi database gagal.']));
}

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

if ($password !== $confirm_password) {
    echo json_encode(['status' => 'error', 'message' => 'Password dan konfirmasi password tidak cocok.']);
    exit();
}

$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $name, $email, $hashed_password);

if ($stmt->execute()) {
    echo json_encode(['status' => 'success', 'message' => 'Register Successl!']);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Register Failed: ' . $stmt->error]);
}

$stmt->close();
$conn->close();
?>