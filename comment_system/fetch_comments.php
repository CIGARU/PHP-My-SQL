<?php
include 'database_connection.php';

function displayComments($parent_id = NULL, $level = 0) {
    global $conn;

    if ($parent_id === NULL) {
        $stmt = $conn->prepare("SELECT * FROM comments WHERE parent_id IS NULL ORDER BY created_at DESC");
    } else {
        $stmt = $conn->prepare("SELECT * FROM comments WHERE parent_id = ? ORDER BY created_at DESC");
        $stmt->bind_param("i", $parent_id);
    }

    $stmt->execute();
    $result = $stmt->get_result();

    while ($comment = $result->fetch_assoc()) {
        echo "<div class='comment' style='margin-left: " . ($level * 20) . "px'>";
        echo "<p>" . htmlspecialchars($comment['content']) . "</p>";
        echo "<div class='comment-buttons'>";
        echo "<button onclick='editComment(" . $comment['id'] . ")'>Chỉnh sửa</button>";
        echo "<button onclick='deleteComment(" . $comment['id'] . ")'>Xóa</button>";
        echo "</div></div>";
        displayComments($comment['id'], $level + 1); // Hiển thị bình luận con
    }
}

displayComments();
?>
