Нейросеть
php
Копировать
<?php
session_start();


if (isset($_SESSION['session_id'])) {
  $session_id = $_SESSION['session_id'];
} else {
  $session_id = 0; 
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>Проверка авторизации</title>
</head>
<body>

<h1>Проверка авторизации</h1>

<?php

if ($session_id == 0) {

  ?>
  <h2>Форма регистрации</h2>
  <form action="process_registration.php" method="post">
    <label for="login">Логин:</label><br>
    <input type="text" id="login" name="login"><br><br>

    <label for="password">Пароль:</label><br>
    <input type="password" id="password" name="password"><br><br>

    <input type="submit" value="Зарегистрироваться">
  </form>
  <?php
} else {

  echo "<p>Вы зарегистрированы, войдите.</p>";

  echo '<a href="login.php">Войти</a>';
}

?>

</body>
</html>