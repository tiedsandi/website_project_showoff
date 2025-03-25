<?php
session_start();

include "../config/koneksi.php";

if ($conn->connect_error) {
    die(json_encode(['status' => 'error', 'message' => 'Koneksi database gagal.']));
}

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    if (password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['email'] = $user['email'];
        echo json_encode(['status' => 'success', 'message' => 'Login success!']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Wrong Password.']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Email Not Found.']);
}

$stmt->close();
$conn->close();
?>