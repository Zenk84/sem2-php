<?php
require_once "connect.php";

$sql = "INSERT INTO hocvien (TEN, NGAY_SINH, GIOI_TINH)
VALUES ('Nguyen Van A', '2000-12-15', 1)";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
