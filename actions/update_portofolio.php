<?php
session_start();
include '../config/db.php'; // Koneksi database

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];
$username = $_POST['username'];
$email = $_POST['email'];
$bio = $_POST['bio'];
$password = $_POST['password'];

// Handle Upload Gambar
if (!empty($_FILES['profile_picture']['name'])) {
    $target_dir = "../uploads/";
    $target_file = $target_dir . basename($_FILES["profile_picture"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Validasi format gambar
    if (in_array($imageFileType, ["jpg", "jpeg", "png"])) {
        move_uploaded_file($_FILES["profile_picture"]["tmp_name"], $target_file);
        $profile_picture = basename($_FILES["profile_picture"]["name"]);
    } else {
        $_SESSION['error'] = "Invalid image format!";
        header("Location: profile.php");
        exit();
    }
} else {
    $profile_picture = null;
}

// Update query
if (!empty($password)) {
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $sql = "UPDATE users SET username = ?, email = ?, bio = ?, password = ?, profile_picture = COALESCE(?, profile_picture) WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssi", $username, $email, $bio, $hashed_password, $profile_picture, $user_id);
} else {
    $sql = "UPDATE users SET username = ?, email = ?, bio = ?, profile_picture = COALESCE(?, profile_picture) WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssi", $username, $email, $bio, $profile_picture, $user_id);
}

if ($stmt->execute()) {
    $_SESSION['success'] = "Profile updated successfully!";
} else {
    $_SESSION['error'] = "Failed to update profile!";
}

header("Location: profile.php");
exit();
?>
