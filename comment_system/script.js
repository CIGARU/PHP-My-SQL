function editComment(id) {
    const newContent = prompt("Nhập nội dung mới:");
    if (newContent) {
        fetch('edit_comment.php', {
            method: 'POST',
            headers: {'Content-Type': 'application/x-www-form-urlencoded'},
            body: `id=${id}&content=${newContent}`
        }).then(response => response.text()).then(data => {
            document.getElementById('comments').innerHTML = data;
        });
    }
}

function deleteComment(id) {
    if (confirm("Bạn có chắc chắn muốn xóa bình luận này không?")) {
        fetch('delete_comment.php', {
            method: 'POST',
            headers: {'Content-Type': 'application/x-www-form-urlencoded'},
            body: `id=${id}`
        }).then(response => response.text()).then(data => {
            document.getElementById('comments').innerHTML = data;
        });
    }
}
