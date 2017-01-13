<?php
// error_reporting(E_ALL);
// ini_set('display_errors', true);
// ini_set('html_errors', false);

$str = $_GET["str"];
$pass = $_GET["pass"];

echo $str;
echo $pass;

echo strcmp($str,"Mario");
echo strcmp($pass,"secret");

$username = strcmp($str, "Mario");
$password = strcmp($pass, "secret");

// echo isset[""];

if ($str == "" && $pass == ""){
    echo "Missing inputs";
}
else if ($username == 0 && $password == 0) {
    echo "Welcome";
}
else {
    echo "Username and/or password are incorrect";
}
?>