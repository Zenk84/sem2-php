<?php

namespace K48\Controller;

require_once '..\DB\DB.php';

use K48\DB\DB;

class LoginController
{
    protected $params;

    public function __construct()
    {
        $this->params['email'] = $_POST['email'] ?? '';
        $this->params['pw'] = $_POST['password'] ?? '';
    }

    public function login() {
        // Todo: kiểm tra tài khoản và mk trong db
        // Todo: login thành công thì lưu chứng nhận
        $pass = md5($this->params['pw']);
        $sql = "SELECT * FROM users WHERE EMAIL='{$this->params['email']}' AND PASSWORD='{$pass}'";
        $db = new DB();
        $result = $db->get($sql);
        if (!$result) {
            echo 'Login not successful!';
            exit();
        }
        unset($result['PASSWORD']); // remove password
        $_SESSION['USER'] = $result;
        header('Location: http://localhost/k48/demo/home');
    }

    private function validInput() {
        // Todo: check email format, password
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $loginObj = new LoginController;
    $loginObj->login();
} else {
    // Redirect lai ve trang login form
    header('Location: http://localhost/k48/demo/login');
}