<?php



$servername = "localhost";//localhostで作っていく時はこっちを反映し、さくらにあげる時は上に切り替える
$username = 'root';
$password = '';
$dbname = "lesson-management-system";

// データベース接続の作成
$conn = new mysqli($servername, $username, $password, $dbname);

// 接続チェック
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
