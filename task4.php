<?php
 $task = "Задача 4";
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
            function subtraction($a,$b){
                return $a - $b;
            }
            function multiplication($a,$b){
                return $a * $b;
            }
            function division($a,$b){
                return $a / $b;
            }
            function mathOperation($a,$b,$operation){
                switch($operation){
                    case 0:
                        echo("<p>".addition($a,$b)."</p>");
                        break;
                    case 1:
                        echo("<p>".subtraction($a,$b)."</p>");
                        break;
                    case 2:
                        echo("<p>".multiplication($a,$b)."</p>");
                        break;
                    case 3:
                        echo("<p>".division($a,$b)."</p>");
                        break;
                }
            }
            $mathOperation = mathOperation(1,3,3);
            // Не смог разобраться, как выполнить case "addition"-"division" с $mathOperation = mathOperation(1,3,addition-division);
        ?>
    </main>
</body>
</html>