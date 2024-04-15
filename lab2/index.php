<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>График работы докторов</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <?php
    // Определение текущего дня недели
    $dayOfWeek = date('w');  // 'w' возвращает день недели (0 для воскресенья, 6 для субботы)

    // Определение рабочих часов для докторов
    $schedule1 = ($dayOfWeek == 1 || $dayOfWeek == 3 || $dayOfWeek == 5) ? "8:00-12:00" : "Нерабочий день";
    $schedule2 = ($dayOfWeek == 2 || $dayOfWeek == 4 || $dayOfWeek == 6) ? "12:00-16:00" : "Нерабочий день";
    ?>

    <table>
        <caption>График работы докторов, каб. 333</caption>
        <thead>
            <tr>
                <th>П.н.</th>
                <th>Фамилия, имя</th>
                <th>График</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Аксенти Елена</td>
                <td><?php echo $schedule1; ?></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Петрова Мария</td>
                <td><?php echo $schedule2; ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>

