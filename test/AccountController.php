<?php

namespace K48\Controller;

require_once 'DB/DB.php';

use K48\DB\DB;

class AccountController
{
    public function create()
    {
        $error = '';
        unset($_SESSION['error']);

        $email = $_POST['email'] ?? '';
        $fName = $_POST['fName'] ?? '';
        $lName = $_POST['lName'] ?? '';
        $gender = $_POST['gender'] ?? '';
        $phone = $_POST['phone'] ?? '';
        $address = $_POST['address'] ?? '';

        //check phone
        if (!is_numeric($phone)) {
//            $_SESSION['error'] = 'Phone wrong format with digit!';
            $error = 'Phone wrong format with digit!';
            header('Location: http://localhost/k48/test/account.php?error=' . $error);
            exit();
        }
        if (strlen($phone) != 10) {
            $error = $_SESSION['error'] = 'Phone wrong format with length!';
            header('Location: http://localhost/k48/test/account.php?error=' . $error);
            exit();
        }
        $firstPhone = substr($phone, 0, 1);
        if ($firstPhone != '0') {
            $error = $_SESSION['error'] = 'Phone wrong format with first char!';
            header('Location: http://localhost/k48/test/account.php?error=' . $error);
            exit();
        }

        $gender = ($gender == 'm') ? 1 : 0;

//        $sql = "SELECT * FROM users WHERE EMAIL='{$this->params['email']}' AND PASSWORD='{$pass}'";
        // Save DB
        $sql = "INSERT INTO accounts (first_name, last_name, gender, phone, email, address) 
VALUES ('{$fName}', '{$lName}', {$gender}, '{$phone}', '{$email}', '{$address}')";
        $db = new DB();
        $result = $db->conn->query($sql);
        if (!$result) {
            echo 'Login not successful!';
            exit();
        }
    }
}

if (!isset($_SESSION)) {
    session_start();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $loginObj = new AccountController;
    $loginObj->create();
} else {
    // Redirect lai ve trang login form
    header('Location: http://localhost/k48/test/account.php');
}