<?php
require_once "../db/connect.php";

// Kiểm tra xem có khớp với method submit dữ liệu không, nếu ko thì chuyển về trang nhập liệu
if ($_SERVER['REQUEST_METHOD'] != 'POST')
    header('Location: http://localhost/k48/practical/number5.php');

$type = $_GET['type'] ?? 'l';
switch ($type) {
    case 'l':
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
        break;
    case 'hv':
        /**
         * Bước Accept data
         */
        $name = $_POST['name'] ?? '';
        $birthday = $_POST['birthday'] ?? '';
        $gender = $_POST['gender'] ?? 1;
        $classId = $_POST['class'] ?? 0;
        if (!$name || !$birthday || !$gender || !$classId) {
            echo "Dữ liệu không hợp lệ";
        }
        // Kiểm tra dữ liệu PK
        $sql = "SELECT ID FROM lop WHERE ID = $classId";
        $result = $conn->query($sql);
        if ($result->num_rows <= 0) {
            echo "Dữ liệu không hợp lệ";
        }

        /**
         * Bước Processing data
         */
        $name = htmlspecialchars($name);
        $gender = ($gender == 'm') ? 1 : 0;

        /**
         * Bước save vào DB
         */
        $sql = "INSERT INTO hocvien (TEN, GIOI_TINH, NGAY_SINH, LOP_ID) 
VALUES ('$name', $gender, '$birthday', $classId)";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
        break;
}

