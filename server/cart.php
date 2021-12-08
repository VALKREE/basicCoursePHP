<?PHP 
	session_start();
	const SERVER = "localhost";
	const DB = "db_goods";
	const LOGIN = "root";
	const PASSWORD = "";
	$connect = mysqli_connect(SERVER,LOGIN,PASSWORD,DB);
	if ($connect->connect_error) {
		die("Ошибка соединения: " . $connect->connect_error);
	}
	$sql = "SELECT * FROM goods WHERE id = '{$_POST['good_id']}'";
	$res = mysqli_query($connect, $sql) or die("Ошибка: ".mysqli_error($connect ));
	while($data = mysqli_fetch_assoc($res)){
		$_SESSION['id'] = $data['id'];
		$_SESSION['title'] = $data['title'];
		$_SESSION['price'] = $data['price'];
		$_SESSION['quantity'] = $_POST['quantity'];
		$_SESSION['summary'] = $_SESSION['price'] * $_SESSION['quantity'];
?>
		<tr class='main-cartRow flexRow'>
			<td class='main-cartCol flexColumn'><?PHP echo $_SESSION['id'] ?></td>
			<td class='main-cartCol flexColumn'><?PHP echo $_SESSION['title'] ?></td>
			<td class='main-cartCol flexColumn'><?PHP echo $_SESSION['price'] ?> &#8381;</td>
			<td class='main-cartCol flexColumn'><?PHP echo $_SESSION['quantity'] ?></td>
			<td class='main-cartCol flexColumn'><?PHP echo $_SESSION['summary'] ?> &#8381;</td>
		</tr>
<?PHP
	}
?>

