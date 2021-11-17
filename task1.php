<?php
 $task = "Задача 1";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $task ?></title>
</head>
<body>
    <header>
        <h1><?= $task ?></h1>
        <div style="display: flex; flex-direction: row; gap: 10px;">
                    <a href="./index.php">Главная</a>
                    <a href="./task1.php">Задача 1</a>
                    <a href="./task2.php">Задача 2</a>
                    <a href="./task3.php">Задача 3</a>
                    <a href="./task4.php">Задача 4</a>
                    <a href="./task5.php">Задача 5</a>
                <div>
    </header>
    <main style="display:flex;flex-direction:column;">
        <?php
            $a = 1;
            $b = -2;
            $c = 0;
            if($a >= 0 && $b >= 0){
                $c = $a - $b;
            }
            if($a < 0 && $b <0){
                $c = $a * $b;
            }
            if($a >= 0 && $b <0 || $a < 0 && $b >= 0){
                $c = $a + $b;
            }
        ?>
        <p>Текущее значение переменных: a= <?= $a ?>, b= <?= $b ?>
        <p>Ответ: <?= $c ?></p>
    </main>
</body>
</html>