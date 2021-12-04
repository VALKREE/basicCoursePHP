<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Задание 2 - калькулятор с кнопками</title>
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
		<form class="calculate" method='post' action="">
			<input class="calculate-input" type="text" name="number1" class="numbers" placeholder="Первое число">
			<input class="calculate-input" type="text" name="number2" class="numbers" placeholder="Второе число">
			<div class="calculate-operators">				
				<div>
					<input type="radio" id="addition" name="operation" value="addition">
					<label for="addition">Сложение</label>
				</div>				
				<div>
					<input type="radio" id="subtraction" name="operation" value="subtraction">
					<label for="subtraction">Вычитание</label>
				</div>				
				<div>
					<input type="radio" id="multiplication" name="operation" value="multiplication">
					<label for="multiplication">Умножение</label>
				</div>				
				<div>
					<input type="radio" id="division" name="operation" value="division">
					<label for="division">Деление</label>
				</div>
			</div>
			<input class="submit_form" type="submit" name="submit" value="Получить ответ"> 
			<?php
	if(isset($_POST['submit'])){
		$number1 = $_POST['number1'];
		$operation = $_POST['operation'];
		$number2 = $_POST['number2'];
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
    		switch($operation){
					case 'addition':
					    $operationName = "Сложение";
					    break;
					case 'subtraction':
					    $operationName = "Вычитание";
					    break;
					case 'multiplication':
					    $operationName = "Умножение";
					    break;
					case 'division':
					    $operationName = "Деление";
					       
				}	
	    	echo "<div class='answer-text'>Оператор: $operationName <br> Ответ: $result</div>";
    	}
	}
?>
		</form>
	</main>	
<style>
	.calculate{
		width: 300px;
		display: flex;
		flex-direction: column;
		gap: 15px;
		justify-content: center;
		align-items: center;
	}
	.answer-text{
		display: flex;
	}
</style>
</body>
</html>

