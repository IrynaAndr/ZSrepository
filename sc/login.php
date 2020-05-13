<?php
  $login = filter_var(trim($_POST['Login']), FILTER_SANITIZE_STRING);
  $Password = $_POST['Password'];
  $UserRole = 0;

  //echo "Login: $login, Password: $Password";

  if(mb_strlen($login) < 5 || mb_strlen($login) > 30) {
    echo "Недопустимая длинна логина";
    exit();
  }elseif (mb_strlen($Password) < 5 || mb_strlen($Password) > 30) {
    echo "Недопустимая длинна пароля";
    exit();
  }

  $mysql = new mysqli('localhost','id13682932_hh','123123123-Asd','id13682932_hbd');

  $result = $mysql->query("SELECT * FROM `User` WHERE `Login` = '$login' AND `Password` = '$Password'");
  $user = $result->fetch_assoc(); //fetch_assoc() - все данные с БД конвертирует в привычный массив
  if(count($user) == 0) {
    echo "Такого пользователя не найдено";
    exit();
  }

  setcookie('userL', $user['Login'], time() + 3600, "/");
  setcookie('auth', 1, time() + 3600, "/");

  $mysql->close();
  header('Location: /');
?>
