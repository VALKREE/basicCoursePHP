<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Урок 4. Работа с файлами</title>
    <link rel="stylesheet" href="./CSS/index.css">
</head>
<body class="body">
    <div class="wrapper">
        <header class="header">
            <a href="lesson5:80/">Главная</a>
            <a href="#">Link</a>
            <a href="#">Link</a>
            <a href="#">Link</a>
            <a href="#">Link</a>
        </header>
        <main class="main">
            <div class="fullImage-container">
                <h3 class="fullImage-heading"><?= $_GET['title']?></h3>
                <img class="fullImage-image" src="./images/source/image<?= $_GET['file']?>.png" alt=""><br>
                <p class="fullImage-description"><?= $_GET['description']?></p>
                <a class="fullImage-back" href="<?= $_SERVER['HTTP_REFERER'] ?>">Назад</a>
            </div>
        </main>
        <footer class="footer">
            <a href="#">Link</a>
            <a href="#">Link</a>
            <a href="#">Link</a>
            <a href="#">Link</a>
            <a href="#">Link</a>
        </footer>
    </div>
</body>
</html>
