<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Простой тест</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $score = 0;

        // Вопрос 1
        $answer1 = $_POST['question1'];
        if ($answer1 == "2") { // Предполагаем, что правильный ответ - это вариант 2
            $score++;
        }

        // Вопрос 2
        $answer2 = isset($_POST['question2']) ? $_POST['question2'] : [];
        $correctAnswers2 = ["a", "c"]; // Правильные ответы
        if ($answer2 == $correctAnswers2) {
            $score++;
        }

        // Вопрос 3
        $answer3 = $_POST['question3'];
        if ($answer3 == "b") { // Предполагаем, что правильный ответ - это вариант b
            $score++;
        }

        echo "<h3>Результаты теста для $name</h3>";
        echo "<p>Вы ответили правильно на $score из 3 вопросов.</p>";
    } else {
    ?>
    <form action="" method="post">
        <p>Введите ваше имя: <input type="text" name="name" required></p>
        
        <p>1. Какой сейчас год? (один правильный ответ)</p>
        <input type="radio" name="question1" value="1"> 2020<br>
        <input type="radio" name="question1" value="2"> 2023<br>
        <input type="radio" name="question1" value="3"> 2022<br>

        <p>2. Какие из этих языков являются языками программирования? (несколько правильных ответов)</p>
        <input type="checkbox" name="question2[]" value="a"> Python<br>
        <input type="checkbox" name="question2[]" value="b"> HTML<br>
        <input type="checkbox" name="question2[]" value="c"> Java<br>
        <input type="checkbox" name="question2[]" value="d"> XML<br>

        <p>3. Какая столица Франции? (один правильный ответ)</p>
        <input type="radio" name="question3" value="a"> Лондон<br>
        <input type="radio" name="question3" value="b"> Париж<br>
        <input type="radio" name="question3" value="c"> Берлин<br>

        <input type="submit" value="Отправить ответы">
    </form>
    <?php
    }
    ?>
</body>
</html>

