<?PHP
	session_start();
	const SERVER = "localhost";
    const DB = "db_users";
    const LOGIN = "root";
    const PASSWORD = "";
	$connect = mysqli_connect(SERVER,LOGIN,PASSWORD,DB);
	if ($connect->connect_error) {
		die("Ошибка соединения: " . $connect->connect_error);
	}
	$login = md5($_POST['login']);
	$password = md5($_POST['password']);
	$sql = "
		SELECT * FROM users 
			WHERE login = '$login' 
			AND password = '$password'
		";
	$res = mysqli_query($connect, $sql) or die("Ошибка: ".mysqli_error($connect ));
	while($data = mysqli_fetch_assoc($res)){
		$_SESSION['id'] = $data['id'];
		$_SESSION['name'] = $data['name'];
	}
	if(mysqli_num_rows($res) == 1){
		$_SESSION['login'] = $_POST['login'];
		$_SESSION['password'] = $_POST['password'];
		header("Location: ../profile.php");
	}else{
		header("Location: ../profile.php?state=login");
	}
?>