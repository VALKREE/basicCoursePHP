<?php
 $task = "Задача 3";
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
            function addition($a,$b){
                return $a + $b;
            }
            $addition = addition(1,3);
            echo ("<p>Сложение: ".$addition."</p>");
            function subtraction($a,$b){
                return $a - $b;
            }
            $subtraction = subtraction(1,3);
            echo ("<p>Вычитание: ".$subtraction."</p>");
            function multiplication($a,$b){
                return $a * $b;
            }
            $multiplication = multiplication(1,3);
            echo ("<p>Умножение: ".$multiplication."</p>");
            function division($a,$b){
                return $a / $b;
            }
            $division = division(1,3);
            echo ("<p>Деление: ".$division."</p>");
        ?>
    </main>
</body>
</html>