<?PHP
	include "../config.php";
	if($_GET['state'] == 'account'){
		$sql_accounts = "
			UPDATE users SET 
				id_user = '{$_POST['user']}', 
				full_name = '{$_POST['full_name']}', 
				phone_number = '{$_POST['phone_number']}', 
				adress = '{$_POST['adress']}', 
				login = '{$_POST['login']}', 
				role = '{$_POST['role']}' 
			WHERE
				id_user = '{$_POST['user']}'
		";
		$res = mysqli_query($connect,$sql_accounts);

		header("Location: ../index.php?page=profile");
	}

	if($_GET['state'] == 'good'){
		$sql_goods = "
			UPDATE goods SET 
				id = '{$_POST['good_id']}',
				title = '{$_POST['good_title']}',
				info = '{$_POST['good_info']}',
				price = '{$_POST['good_price']}',
				img = '{$_POST['good_img']}',
				date_create	 = '{$_POST['good_date_create']}'		 
			WHERE
				id = '{$_POST['good_id']}'
		";
		$res = mysqli_query($connect,$sql_goods);

		header("Location: ../index.php?page=profile");
	}

	if($_GET['state'] == 'order'){
		$sql_orders = "
			UPDATE orders SET 
				id_user = '{$_POST['id_user']}',
				content = '{$_POST['content']}',
				id = '{$_POST['id']}',
				status_order = '{$_POST['status_order']}',
				date_order = '{$_POST['date_order']}'	 
			WHERE
				id_user = '{$_POST['id_user']}'
		";
		$res = mysqli_query($connect,$sql_orders);

		header("Location: ../index.php?page=profile");
	}
?>

