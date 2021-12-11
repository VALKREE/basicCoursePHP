<?PHP 
	const SERVER = "localhost";
	const LOGIN = "root";
	const PASSWORD = "";
	const DB = "php";

	$connect = mysqli_connect(SERVER,LOGIN,PASSWORD,DB);
	if ($connect->connect_error) {
		die("Ошибка соединения: " . $connect->connect_error);
	}
?>