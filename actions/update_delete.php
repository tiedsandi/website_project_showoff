<?php
session_start();
// require '../inc/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];

    $query = "DELETE FROM portfolios WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id);
    
    if ($stmt->execute()) {
        echo json_encode(["success" => true, "message" => "Portfolio deleted successfully."]);
    } else {
        echo json_encode(["success" => false, "message" => "Failed to delete portfolio."]);
    }
}
?>
