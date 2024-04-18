<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Галерея изображений</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background: #f4f4f4; color: #333; }
        header, footer { background: #333; color: #fff; padding: 10px 20px; text-align: center; }
        nav { background: #555; padding: 10px 20px; }
        nav a { color: white; text-decoration: none; padding: 10px 15px; }
        .container { width: 80%; margin: 20px auto; overflow: auto; }
        .image { float: left; width: 19%; margin: 0.5%; background: white; padding: 10px; box-sizing: border-box; }
        .image img { width: 100%; height: auto; }
        @media (max-width: 600px) {
            .image { width: 49%; }
        }
    </style>
</head>
<body>
    <header>
        <h1>Галерея изображений</h1>
    </header>
    <nav>
        <a href="/">Главная</a> | <a href="/about">О нас</a>
    </nav>
    <div class="container">
        <?php
        $dir = 'image/';  
        $files = scandir($dir);
        if ($files !== false) {
            for ($i = 0; $i < count($files); $i++) {
                if ($files[$i] != "." && $files[$i] != "..") {
                    $path = $dir . $files[$i];
                    echo "<div class='image'><a href='$path'><img src='$path' alt='Image'/></a></div>";
                }
            }
        } else {
            echo "<p>Не удалось загрузить изображения.</p>";
        }
        ?>
    </div>
    <footer>
        <p>&copy; 2024 Ваша компания</p>
    </footer>
</body>
</html>

