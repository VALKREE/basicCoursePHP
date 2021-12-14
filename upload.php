<?PHP
	include "config.php";
	$sql = "SELECT * FROM feedback";
	$res = mysqli_query($connect,$sql);
	if(isset($_POST["submit"])) {
		$id = $_POST['id'];
		$name = $_POST['name'];
		$text = $_POST['text'];
		$date = $_POST['date'];
		echo $id, $name, $text, $date;
		$sql_feedback = "
			INSERT INTO $sql (id, name, text, date) 
			VALUES ('".$id."', '".$name."', '".$text."', '".$date."')
		"; 
	}
?>