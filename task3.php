<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Задание 3 - отзывы</title>
</head>
<?PHP
	include "config.php";
    $sql_feedback = "SELECT * FROM feedback";
    $res = mysqli_query($connect,$sql_feedback);
?>
<style>
	.main{
		padding-left: calc(50% - 570px);
		padding-right: calc(50% - 570px);
		display: flex;
		flex-direction: column;
		justify-content: center;
		align-items: center;
		gap: 5px;
	}
	.feedback-form{
		display: flex;
		flex-direction: column;
		gap: 5px;
		border: 1px solid #000;
		padding: 1rem;
		width: 310px;
	}
	.feedback-textarea{
		width: 300px;
		height: 110px;
		padding: .7rem;
	}
	.feedback-date{
		font-size: 18px;
	}
	.feedbackField{
		border: 1px solid #000;
		min-height: 300px;
		width: 100%;
		padding: 1rem;
		display: flex;
		flex-direction: column;
		gap: 1rem;
	}
	.feedback-item{
		width: 100%;
		display:flex;
		flex-direction: column;
		justify-content: center;
		align-items: center;
		margin: .2rem;
	}
	.feedback-heading{
		font-size: 24px;
	}
	.feedback-text{
		font-size: 24px;
		word-break: break-all;
	}
	
</style>
<body>
	<!-- 3. Добавить функционал отзывов в имеющийся у вас проект. -->
	<header style="height: 32px;display:flex;gap:15px;justify-content: center;align-items: center;">
		<a href="./index.php">Главная</a>
		<a href="./task1.php">Задание 1</a>
		<a href="./task2.php">Задание 2</a>
		<a href="./task3.php">Задание 3</a>
		<a href="./task4.php">Задание 4</a>
	</header>
	<main class="main">
		<form class="feedback-form" action="" method="POST" name="id" id=[]>
			<label>Ваше имя</label>
			<input type="text" name="name" />
			<label>Ваше сообщение</label>
			<textarea class="feedback-textarea" name="text"></textarea>
			<label>Дата</label>
			<input type="date" name="date" />

			<input type="submit" value="Отправить" name="submit">
			<?PHP
				if(isset($_POST["submit"])) {
					include "config.php";
					$conn = new mysqli(SERVER,LOGIN,PASSWORD,DB);
					if ($conn->connect_error) {
					  die("Ошибка подключения: " . $conn->connect_error);
					}
					
					$name = $_POST['name'];
					$text = $_POST['text'];
					$date = $_POST['date'];
					$sql = "INSERT INTO feedback (id, name, text, date) VALUES ('$id', '$name', '$text', '$date')";

					if ($conn->query($sql) === TRUE) {
					  echo "New record created successfully";
					} else {
					  echo "Error: " . $sql . "<br>" . $conn->error;
					}

					$conn->close();
				}
			?>
		</form>
		<div class="feedbackField">
			<?PHP
				const SERVER = "localhost";
			    const DB = "db_feedback";
			    const LOGIN = "root";
			    const PASSWORD = "";

			    $connect = mysqli_connect(SERVER,LOGIN,PASSWORD,DB);
				$sql = "SELECT * FROM feedback";
	    		$res = mysqli_query($connect,$sql);
	    		while($data = mysqli_fetch_assoc($res)){
	    			echo "
		    			<div class='feedback-item' id='{$data['id']}'> 
		    				<h3 class='feedback-heading'>{$data['name']}</h3>
		    				<p class='feedback-text'>{$data['text']}</p>
		    				<p class='feedback-date'>{$data['date']}</p>
		    			</div>
	    			";
	    		}
			?>
		</div>
	</main>
</body>
</html>