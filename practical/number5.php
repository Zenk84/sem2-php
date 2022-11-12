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
    <form action="http://localhost/k48/practical/number5be.php" method="post">
        <div class="mb-3">
            <label for="lop" class="form-label">Tên Lớp:</label>
            <input type="text" class="form-control" id="lop" name="name" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>