<?php
include 'database_connection.php';

$id = $_POST['id'];
$content = $_POST['content'];

$stmt = $conn->prepare("UPDATE comments SET content = ? WHERE id = ?");
$stmt->bind_param("si", $content, $id);
$stmt->execute();

include 'fetch_comments.php';
?>
