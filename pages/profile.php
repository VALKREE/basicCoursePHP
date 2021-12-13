<?PHP
	include "./config.php";

	$sql = "SELECT * FROM users WHERE id_user = {$_SESSION['id_user']}";
	$res = mysqli_query($connect,$sql);
	//0 - гость 1 - зарегистрированный пользователь 3 - модератор 4 - администратор
	while($data = mysqli_fetch_assoc($res)){
		if($data['role'] == 1){ // Авторизованный пользователь?>
			<h2><?PHP echo $data['full_name'] ?>, добро пожаловать в личный кабинет!</h2>
			<div class="main-profileContacts">
				<p>Ваши данные:</p>
				<p><b>ФИО:</b> <?PHP echo $data['full_name'] ?></p>
				<p><b>Телефон:</b> <?PHP echo $data['phone_number'] ?></p>
				<p><b>Адрес:</b> <?PHP echo $data['adress'] ?></p>
			</div>
			<div class="main-profileOrders">
				<h3>Заказы:</h3>
			</div>
		<?PHP }
		
		if($data['role'] == 3 || $data['role'] == 4){ // Модератор ?>
			<div class="main-usersBar">
				<details class="main-details">
					<summary class="main-summary"><h3>Таблица пользователей</h3></summary>
					<?PHP 
						$sql = "SELECT * FROM users";
						$res = mysqli_query($connect,$sql);
						if($res){
							if(isset($_POST['user_save'])) {
								$sql1 = "
									UPDATE users 
									SET 
										full_name = {$data['full_name']}
									WHERE id_user = {$_SESSION['id_user']}
								";
								$res1 = mysqli_query($connect,$sql1);
							}
							while($data = mysqli_fetch_assoc($res)){ ?>
								<form class="main-userBar" method="POST">
									<p>ID пользователя: 
										<input 
											class="main-userText" 
											id="user_<?PHP echo $data['id_user'] ?>" 
											value="<?PHP echo $data['id_user'] ?>"
										>
									</p>
									<p>Логин пользователя: 
										<input class="main-userText" value="<?PHP echo $data['login'] ?>">
									</p>
									<p>Роль пользователя: 
										<input class="main-userText" value="<?PHP echo $data['role'] ?>">
									</p>
									<p>ФИО пользователя: 
										<input class="main-userText" value="<?PHP echo $data['full_name'] ?>">
									</p>
									<p>Телефон пользователя: 
										<input class="main-userText" value="<?PHP echo $data['phone_number'] ?>">
									</p>
									<p>Адрес пользователя: 
										<input class="main-userText" value="<?PHP echo $data['adress'] ?>">
									</p>
									<input type="submit" name="user_save" id="user-save" value="Сохранить">		
								</form>
							<?PHP }
						}
					?>
				</details>				
			</div>
			<div class="main-goodsBar">
				<details class="main-details">
					<summary class="main-summary"><h3>Таблица товаров</h3></summary>
					<?PHP 
					$sql = "SELECT * FROM goods";
					$res = mysqli_query($connect,$sql);
					while($data = mysqli_fetch_assoc($res)){ ?>
						<div class="main-goodBar">
							<p>ID товара: <input class="main-userText" value="<?PHP echo $data['id'] ?>"></p>
							<p>Наименование товара: <input class="main-userText" value="<?PHP echo $data['title'] ?>"></p>
							<p>Информация товара: <input class="main-userText" value="<?PHP echo $data['info'] ?>"></p>
							<p>Цена товара: <input class="main-userText" value="<?PHP echo $data['price'] ?>"></p>
							<p>Картинка товара: <input class="main-userText" value="<?PHP echo $data['img'] ?>"></p>
							<p>Дата создания: <input class="main-userText" value="<?PHP echo $data['date_create'] ?>"></p>
							<input class="main-userSubmit" type="submit" name="good-submit">
						</div>
					<?PHP }
				?>
				</details>			
			</div>
		<?PHP }
		
		if($data['role'] == 4){ // Администратор
			echo 1;	
		}
	}
?>