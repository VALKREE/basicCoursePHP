<?php
 $task = "Задача 2";
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
            $a = 15;
            switch ($a){
                default:
                    echo("a = 0");
                    break;
                case 1:
                    echo("a = 1");
                    break;
                case 2:
                    echo("a = 2");
                    break;
                case 3:
                    echo("a = 3");
                    break;
                case 4:
                    echo("a = 4");
                    break;
                case 5:
                    echo("a = 5");
                    break;
                case 6:
                    echo("a = 6");
                    break;
                case 7:
                    echo("a = 7");
                    break;
                case 8:
                    echo("a = 8");
                    break;
                case 9:
                    echo("a = 9");
                    break;
                case 10:
                    echo("a = 10");
                    break;
                case 11:
                    echo("a = 11");
                    break;
                case 12:
                    echo("a = 12");
                    break;
                case 13:
                    echo("a = 13");
                    break;
                case 14:
                    echo("a = 14");
                    break;
                case 15:
                    echo("a = 15");
                    break;
            }
        ?>
    </main>
</body>
</html>