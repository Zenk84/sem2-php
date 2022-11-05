<?php
$name = $_GET['fullName'] ?? 'N/A';
$age = $_GET['age'] ?? 0;

if ($age < 1) {
    echo "Input data incorect";
    exit;
}
if ($name == 'N/A') {
    echo "Input data incorect";
    exit;
}
echo "Name is: <b>$name</b> and Age is: <u>$age</u>";
echo "<br><br>";
echo "ID: ", $_GET['id'];
var_dump($_GET['id']);

