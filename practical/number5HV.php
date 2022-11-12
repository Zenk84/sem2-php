<?php
require_once "../db/connect.php";

$sql = "SELECT ID, TEN FROM lop";
$result = $conn->query($sql);
$dsLop = [];
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $dsLop[] = $row;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lop Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <style>
        .container {
            max-width: 700px;
            margin-top: 30px;
        }
    </style>
</head>
<body>
<div class="container">
    <form action="http://localhost/k48/practical/number5be.php?type=hv" method="post">
        <div class="mb-3">
            <label for="name" class="form-label">Tên:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="birthday" class="form-label">Ngày Sinh:</label>
            <input type="date" class="form-control" id="birthday" name="birthday" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Giới Tính:</label>&nbsp;&nbsp;
            <input type="radio" name="gender" value="m" required> Nam
            <input type="radio" name="gender" value="f" required> Nữ
        </div>
        <div class="mb-3">
            <label for="class" class="form-label">Lớp:</label>
            <select id="class" name="class" required>
                <option value="0">-- Select One --</option>
                <?php foreach ($dsLop as $lop): ?>
                    <option value="<?= $lop['ID'] ?>"><?= $lop['TEN'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>