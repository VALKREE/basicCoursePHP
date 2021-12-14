<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Задание 1 - калькулятор</title>
</head>
<body>
	<header style="height: 32px;display:flex;gap:15px;justify-content: center;align-items: center;">
		<a href="./index.php">Главная</a>
		<a href="./task1.php">Задание 1</a>
		<a href="./task2.php">Задание 2</a>
		<a href="./task3.php">Задание 3</a>
		<a href="./task4.php">Задание 4</a>
	</header>
	<main>
		<form method='post' class="calculate-form" action="">
			<input type="text" name="number1" class="numbers" placeholder="Первое число">
			<select class="operations" name="operation">
				<option value='addition'>+</option>
				<option value='subtraction'>-</option>
				<option value="multiplication">*</option>
				<option value="division">/</option>
			</select>
			<input type="text" name="number2" class="numbers" placeholder="Второе число">
			
			<input class="submit_form" type="submit" name="submit" value="Получить ответ"> 
		</form>
	</main>	
</body>
</html>
<?php
	if(isset($_POST['submit'])){
		$number1 = $_POST['number1'];
		$number2 = $_POST['number2'];
		$operation = $_POST['operation'];
		if(!$operation || (!$number1 && $number1 != '0') || (!$number2 && $number2 != '0')) {
			$error_result = 'Не все поля заполнены';
		}
	    else {		   
			if(!is_numeric($number1) || !is_numeric($number2)){
				$error_result = "Введите только числа";
			}else 
	        	switch($operation){
					case 'addition':
					    $result = $number1 + $number2;
					    break;
					case 'subtraction':
					    $result = $number1 - $number2;
					    break;
					case 'multiplication':
					    $result = $number1 * $number2;
					    break;
					case 'division':
					    if( $number2 == '0')
					    	$error_result = "На ноль делить нельзя!";
					    else
					       $result = $number1 / $number2;
					    break;    
				}		    
			}
    	if(isset($error_result)){
    		echo "<div class='error-text'>Ошибка: $error_result</div>";
    	}	
    	else {
	    	echo "<div class='answer-text'>Ответ: $result</div>";
    	}
	}	
?>
