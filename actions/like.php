<?php
session_start();
include '../inc/db_connect.php'; // Pastikan file ini berisi koneksi ke database

if (!isset($_SESSION['user_id'])) {
    echo json_encode(['status' => 'error', 'message' => 'User not logged in']);
    exit;
}

$user_id = $_SESSION['user_id'];
$portofolio_id = $_POST['portofolio_id'] ?? null;

if (!$portofolio_id) {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request']);
    exit;
}

// Cek apakah user sudah like sebelumnya
$query = "SELECT * FROM likes WHERE users_id = ? AND portofolio_id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("ii", $user_id, $portofolio_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Jika sudah like, hapus like
    $query = "DELETE FROM likes WHERE users_id = ? AND portofolio_id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ii", $user_id, $portofolio_id);
    $stmt->execute();
    $liked = false;
} else {
    // Jika belum like, tambahkan like
    $query = "INSERT INTO likes (users_id, portofolio_id) VALUES (?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ii", $user_id, $portofolio_id);
    $stmt->execute();
    $liked = true;
}

// Hitung jumlah like terbaru
$query = "SELECT COUNT(*) as total_likes FROM likes WHERE portofolio_id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $portofolio_id);
$stmt->execute();
$result = $stmt->get_result();
$total_likes = $result->fetch_assoc()['total_likes'];

echo json_encode([
    'status' => 'success',
    'liked' => $liked,
    'like_count' => $total_likes
]);
?>
