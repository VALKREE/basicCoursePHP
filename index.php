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
<?PHP
    include "config.php";
    $sql_images = "SELECT * FROM images";
    $sql_fullImages = "SELECT * FROM images";
    $res = mysqli_query($connect,$sql_images);
?>
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
                <div class="gallery">
                    <form class="gallery-form" action="upload.php" method="post" enctype="multipart/form-data">
                        <label class="gallery-heading">Выберите файл</label>
                        <input class="gallery-file" type="file" accept="image/*" name="image" />
                        <input class="gallery-submit" type="submit" value="Загрузить" />
                    </form>
                    <div class="gallery-items">
                        <?php
                            include "scan.php";
                        ?>
                    <div>
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