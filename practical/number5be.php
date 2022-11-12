<?php
require_once "../db/connect.php";

// Kiểm tra xem có khớp với method submit dữ liệu không, nếu ko thì chuyển về trang nhập liệu
if ($_SERVER['REQUEST_METHOD'] != 'POST')
    header('Location: http://localhost/k48/practical/number5.php');
/**
 * Bước Accept data
 */
// Lấy giá trị của Form gửi lên
$nameLop = $_POST['name'] ?? '';
if (!$nameLop) {
    echo "Dữ liệu không hợp lệ";
}

/**
 * Bước Processing data
 */
$nameLop = htmlspecialchars($nameLop);// "; delete into tableName; --

/**
 * Bước save vào DB
 */
$sql = "INSERT INTO lop (TEN) VALUES ('$nameLop')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
