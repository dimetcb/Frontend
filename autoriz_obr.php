<?php
header('Content-Type: text/html; charset=utf-8');
$email = $_POST['name_email'];
$pass = $_POST['name_pass'];

echo "Email: $email<br>
Пароль: $pass";

?>
