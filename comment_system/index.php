<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comment System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="comment-section">
    <h2>Comments</h2>

    <!-- Form bình luận -->
    <form id="commentForm" method="POST" action="comment.php">
        <textarea name="content" placeholder="Write a comment..." required></textarea>
        <button type="submit">Bình luận</button>
    </form>

    <!-- Phần hiển thị bình luận -->
    <div id="comments">
        <?php include 'fetch_comments.php'; ?>
    </div>
</div>

<script src="script.js"></script>
</body>
</html>
