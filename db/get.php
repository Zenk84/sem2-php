<?php
require_once "connect.php";

$sql = "SELECT ID, TEN, NGAY_SINH, GIOI_TINH FROM hocvien";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while ($row = $result->fetch_assoc()) {
    echo "<b>ID:</b> " . $row["ID"] . "<br>";
    echo "<b>TEN:</b> " . $row["TEN"] . "<br>";
    echo "<b>NGAY SINH:</b> " . $row["NGAY_SINH"] . "<br>";
    echo "<b>GIOI TINH:</b> " . ($row["GIOI_TINH"] == 1) ? 'Nam' : 'Nu' . "<br>";
  }
} else {
  echo "0 results";
}

$conn->close();
