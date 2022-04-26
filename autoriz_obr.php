<?php
  header('Content-Type: text/html; charset=utf-8');

  $mysqli = mysqli_connect("localhost", "oiujmjkg_firstbd", "12345", "oiujmjkg_firstbd");
    if ($mysqli == false) {
      print("error");
  } else {

  $email = $_POST['email'];
  $pass = $_POST['password'];

  $result = $mysqli->query("SELECT * FROM `users` WHERE `email` = '$email'  AND `password` = '$pass'");

  if ($result->num_rows !== 0) {
    print("ok");
  } else {
    print("error");
  }
}

// echo "Email: $email<br>
//  Пароль: $pass";

?>
