<?php
/*if (!isset($_SESSION)) {
    session_start();
}
$error = $_SESSION['error'] ?? $_GET['error'] ?? '';*/
$error = $_GET['error'] ?? '';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Account Page</title>
    <style>
        .red {
            color: red;
        }

        th {
            text-align: right;
        }
    </style>
</head>
<body>
<h1>Create Account</h1>
<form action="AccountController.php" method="post">
    <table>
        <tr>
            <th>Email <span class="red">*</span>:</th>
            <td><input type="email" name="email" required placeholder="Input email"></td>
        </tr>
        <tr>
            <th>First Name <span class="red">*</span>:</th>
            <td><input type="text" name="fName" required placeholder="Input first name"></td>
        </tr>
        <tr>
            <th>Last Name <span class="red">*</span>:</th>
            <td><input type="text" name="lName" required placeholder="Input last name"></td>
        </tr>
        <tr>
            <th>Gender <span class="red">*</span>:</th>
            <td>
                <input type="radio" name="gender" value="m" checked> Male
                <input type="radio" name="gender" value="f"> Female
            </td>
        </tr>
        <tr>
            <th>Phone</th>
            <td><input type="tel" name="phone" placeholder="Input phone"></td>
        </tr>
        <tr>
            <th>Address</th>
            <td><textarea name="address" placeholder="Input address"></textarea></td>
        </tr>
        <tr>
            <th></th>
            <td>
                <input type="reset" value="Reset">
                <input type="submit" value="Submit">
            </td>
        </tr>
    </table>
</form>

<?php if ($error): ?>
<p>
    <span class="red"><?= $error ?></span>
</p>
<?php endif; ?>

</body>
</html>