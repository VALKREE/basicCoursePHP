<?PHP
	session_start();
	include_once "../config.php";
	$errors = "";
	$login = !empty($_POST['login']) ? 
	strip_tags($_POST['login']) : $errors .= "Поле логин, должно быть заполнено!";
	$password = !empty($_POST['password']) ? md5(strip_tags($_POST['password'])) : $errors .= "Поле логин, должно быть заполнено!";

	if(isset($_POST['registration'])){
		$full_name = !empty($_POST['full_name']) ? strip_tags($_POST['full_name']) : $errors = "Поле имя, должно быть заполнено!";
		$phone_number = !empty($_POST['phone_number']) ? strip_tags($_POST['phone_number']) : $errors = "Поле телефон, должно быть заполнено!";
		$adress = !empty($_POST['adress']) ? strip_tags($_POST['adress']) : $errors = "Поле телефон, должно быть заполнено!";
		if(!empty($errors)){
			header("Location: /?page=registration&errors_registration=$errors");
		}else{
			$sql = "INSERT INTO users(full_name,phone_number,adress,login,password,role)
					VALUES ('$full_name','$phone_number','$adress','$login','$password',1)";
			$res = mysqli_query($connect,$sql);
			if($res){
				header("Location: /?page=registration&success_registration=true");
				header("Location: /?page=auth");
			}
		}
	}elseif(isset($_POST['auth'])){
		if(!empty($errors)){
			header("Location: /?page=auth?errors_registration=$errors");
		}else{
			$sql = "SELECT id_user,role FROM users WHERE login = '$login' and password = '$password'";
			$res = mysqli_query($connect, $sql);
			$data = mysqli_fetch_assoc($res);
			if(mysqli_num_rows($res) > 0){
				$_SESSION['id_user'] = $data['id_user'];
				if($data['role'] == 4){
					$_SESSION['admin'] = true;
				}
				header("Location: /?page=auth&success_auth=true");
			}else{
				header("Location: /?page=auth&unexit=true");
			}
		}
	}
?>