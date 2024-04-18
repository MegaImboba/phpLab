<!DOCTYPE html> 
<html lang="ru"> 
<head> 
    <meta charset="UTF-8"> 
    <title>Авторизация</title> 
</head> 
<body> 
    <form action="login.php" method="post"> 
        <label for="login">Логин:</label> 
        <input type="text" id="login" name="login" required><br> 
        <label for="password">Пароль:</label> 
        <input type="password" id="password" name="password" required><br> 
        <input type="submit" value="Войти"> 
    </form> 
</body> 
</html>
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    if (!empty($_POST["login"]) && !empty($_POST["password"])) { 
        $hashedPassword = md5($_POST["password"]); 
        $userData = $_POST["login"] . ":" . $hashedPassword; 
 
        // Проверяем наличие пользователя в файле 
        $isValid = false; 
        $file = fopen("users.txt", "r"); 
        while ($line = fgets($file)) { 
            if (trim($line) == $userData) { 
                $isValid = true; 
                break; 
            } 
        } 
        fclose($file); 
 
        if ($isValid) { 
            // Перенаправление на страницу с изображениями 
            header("Location: images.php"); 
            exit; 
        } else { 
            echo "Неверный логин или пароль!"; 
        } 
    } else { 
        echo "Заполните все поля!"; 
    } 
} else { 
    echo "Недопустимый метод запроса"; 
} 
?>
