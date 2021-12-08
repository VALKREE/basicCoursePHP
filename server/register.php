<?PHP
	const SERVER = "localhost";
	const DB = "db_users";
	const LOGIN = "root";
	const PASSWORD = "";
	$id = [];
	$name = strip_tags($_POST['name']);
	$email = strip_tags($_POST['email']);
	$login = strip_tags(md5($_POST['login']));
	$password = strip_tags(md5($_POST['password']));
	$confirmPassword = strip_tags(md5($_POST['confirmPassword']));
	if($password === $confirmPassword){
		$connect = mysqli_connect(SERVER,LOGIN,PASSWORD,DB);
		if ($connect->connect_error) {
			die("Ошибка соединения: " . $connect->connect_error);
		}
		$sql = "INSERT 
			INTO users (id,name,email,login,password,confirmPassword) 
			VALUES ('$id', '$name', '$email', '$login', '$password', '$confirmPassword')
		";
		if ($connect->query($sql) === TRUE) {
			echo "Новая запись успешно выполнена";
		} else {
			echo "Ошибка: " . $sql . "<br>" . $connect->error;
		}

		$connect->close();

		header("Location: ../profile.php?state=login");
	}else{
		header("Location: ../profile.php?state=register");
	}
?>
<script type="text/javascript">
	//Тут должны быть RegEXP для всех input
</script>