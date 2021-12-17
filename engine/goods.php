<?PHP
	session_start();
	include "../config.php";
	$id = (int)($_GET['id']);
	$id_user = $_SESSION['id_user'];
	$sql = "SELECT * FROM cart WHERE id_good = $id AND id_user =".$_SESSION['id_user'];
	$res = mysqli_query($connect,$sql);
	if(mysqli_num_rows($res) > 0){
		$sql1 = "UPDATE cart SET count=count+1 WHERE id_good = $id";
		$res = mysqli_query($connect,$sql1);
	}else{
		$sql1 = "
			INSERT INTO cart(id_good, count, id_user, status)
			VALUES($id, 1, $id_user, 0)";
		$res = mysqli_query($connect,$sql1);
	}
	if($res){
		header("Location: /index.php?page=catalog&success=1");
	}else{
		header("Location: /index.php?page=catalog&success=2");
	}
?>