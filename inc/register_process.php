<?php

include "../config/koneksi.php";

if ($conn->connect_error) {
    die(json_encode(['status' => 'error', 'message' => 'Koneksi database gagal.']));
}

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

// Validasi email
$stmt = $conn->prepare("SELECT email FROM users WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    echo json_encode(['status' => 'error', 'message' => 'Email sudah terdaftar.']);
    $stmt->close();
    $conn->close();
    exit();
}

$stmt->close();

if ($password !== $confirm_password) {
    echo json_encode(['status' => 'error', 'message' => 'Password dan konfirmasi password tidak cocok.']);
    $conn->close();
    exit();
}

$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $name, $email, $hashed_password);

if ($stmt->execute()) {
    echo json_encode(['status' => 'success', 'message' => 'Pendaftaran berhasil!']);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Pendaftaran gagal: ' . $stmt->error]);
}

$stmt->close();
$conn->close();
?>