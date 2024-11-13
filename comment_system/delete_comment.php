<?php
include 'database_connection.php';

$id = $_POST['id'];

$stmt = $conn->prepare("DELETE FROM comments WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();

include 'fetch_comments.php';
?>
