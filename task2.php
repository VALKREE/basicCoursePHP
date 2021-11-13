<?php
echo "Hello, World!";
?>
<br><p>---</p><br>
<?php
$name = "GeekBrains user";
echo "Hello, $name!";
?>
<br><p>---</p><br>
<?php
define('MY_CONST', 100);
echo MY_CONST;
?>
<br><p>---</p><br>
<?php
$int10 = 42;
$int2 = 0b101010;
$int8 = 052;
$int16 = 0x2A;
echo "Десятеричная система $int10 <br>";
echo "Двоичная система $int2 <br>";
echo "Восьмеричная система $int8 <br>";
echo "Шестнадцатеричная система $int16 <br>";
?>
<br><p>---</p><br>
<?php
$precise1 = 1.5;
$precise2 = 1.5e4;
$precise3 = 6E-8;
echo "$precise1 | $precise2 | $precise3";
?>
<br><p>---</p><br>
<?php
$a1 = 1;
echo "$a1";

echo '$a1';
?>
<br><p>---</p><br>
<?php
$a2 = 10;
$b2 = (boolean) $b;
?>
<br><p>---</p><br>
<?php
$a3 = 'Hello,';
$b3 = 'world';
$c3 = $a3 . $b3;
echo $c3;
?>
<br><p>---</p><br>
<?php
$a4 = 4;
$b4 = 5;
echo $a4 + $b4 . '<br>';    // сложение
echo $a4 * $b4 . '<br>';    // умножение
echo $a4 - $b4 . '<br>';    // вычитание
echo $a4 / $b4 . '<br>';  // деление
echo $a4 % $b4 . '<br>'; // остаток от деления
echo $a4 ** $b4 . '<br>'; // возведение в степень
?>
<br><p>---</p><br>
<?php
$a5 = 4;
$b5 = 5;
$a5 += $b5;
echo 'a = ' . $a5;
$a5 = 0;
echo $a5++;     // Постинкремент
echo ++$a5;    // Преинкремент
echo $a5--;     // Постдекремент
echo --$a5;    // Предекремент
?>
<br><p>---</p><br>
<?php
$a6 = 4;
$b6 = 5;
var_dump($a6 == $b6);  // Сравнение по значению
var_dump($a6 === $b6); // Сравнение по значению и типу
var_dump($a6 > $b6);    // Больше
var_dump($a6 < $b6);    // Меньше
var_dump($a6 <> $b6);  // Не равно
var_dump($a6 != $b6);   // Не равно
var_dump($a6 !== $b6); // Не равно без приведения типов
var_dump($a6 <= $b6);  // Меньше или равно
var_dump($a6 >= $b6);  // Больше или равно
?>