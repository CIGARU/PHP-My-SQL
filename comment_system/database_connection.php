<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
$server = "localhost";
$user = "root";
$pass = ""; // 
$db_name = "comment_system";


$conn = new mysqli($server, $user, $pass, $db_name);

if ($conn->connect_error) {
    die("Lỗi kết nối: " . $conn->connect_error);
} else {
    //echo "Kết nối thành công!";
}
?>
