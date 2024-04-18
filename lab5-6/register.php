<!DOCTYPE html> 
<html lang="ru"> 
<head> 
    <meta charset="UTF-8"> 
    <title>Регистрация</title> 
</head> 
<body> 
    <form action="register.php" method="post"> 
        <label for="login">Логин:</label> 
        <input type="text" id="login" name="login" required><br> 
        <label for="password">Пароль:</label> 
        <input type="password" id="password" name="password" required><br> 
        <input type="submit" value="Зарегистрироваться"> 
    </form> 
</body> 
</html>
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    if (!empty($_POST["login"]) && !empty($_POST["password"])) { 
        // Шифрование пароля 
        $hashedPassword = md5($_POST["password"]); 
        // Сохранение данных в файл 
        $file = fopen("users.txt", "a"); 
        fwrite($file, $_POST["login"] . ":" . $hashedPassword . PHP_EOL); 
        fclose($file); 
        // Отправка HTTP-кода 201 Created 
        http_response_code(201); 
        echo "Пользователь успешно зарегистрирован"; 
    } else { 
        http_response_code(400); 
        echo "Заполните все поля!"; 
    } 
} else { 
    http_response_code(405); 
    echo "Недопустимый метод запроса"; 
} 
?>