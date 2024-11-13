<?php
include 'database_connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $content = $_POST['content'];
    $parent_id = isset($_POST['parent_id']) ? $_POST['parent_id'] : NULL;
    $user_id = 1; // Giả sử user_id là 1 cho ví dụ này

    $stmt = $conn->prepare("INSERT INTO comments (user_id, content, parent_id) VALUES (?, ?, ?)");
    $stmt->bind_param("isi", $user_id, $content, $parent_id);

    if ($stmt->execute()) {
        echo "<script>alert('Bình luận đã được thêm thành công'); window.location.href = 'index.php';</script>";
    } else {
        echo "<script>alert('Có lỗi xảy ra, vui lòng thử lại'); window.location.href = 'index.php';</script>";
    }
} else {
    header("Location: index.php");
    exit();
}
?>
