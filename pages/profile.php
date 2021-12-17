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
				<div class="main-order">
					<?PHP
						$sql_order = "SELECT * FROM orders WHERE id_user = '{$_SESSION['id_user']}'";
						$res_order = mysqli_query($connect,$sql_order);
						while($data_order = mysqli_fetch_assoc($res_order)){ ?>
							<form class="main-orderForm" method="POST" action="./engine/profile.php?state=order">
								<p>
									ID заказа: <?PHP echo $data_order['id'] ?>
								</p>
								<p>
									ID пользователя: <?PHP echo $data_order['id_user'] ?>
								</p>
								<p>
									Содержимое заказа: <?PHP echo $data_order['content'] ?>
								</p>
								<?PHP
									$sql_orderStatus = "SELECT * FROM order_status WHERE id = {$data_order['status_order']}";
									$res_orderStatus = mysqli_query($connect, $sql_orderStatus);
									while($data_orderStatus = mysqli_fetch_assoc($res_orderStatus)){ ?>
										<p>
											Статус заказа: <?PHP echo $data_orderStatus['status'] ?>
										</p>
									<?PHP }
								?>
								<p>
									Дата заказа: <?PHP echo $data_order['date_order'] ?>
								</p>
								<p>
									Сумма: <?PHP echo $data_order['TotalSum'] ?>
								</p>
							</form>
						<?PHP }
					?>
				</div>
			</div>
		<?PHP }
		if($data['role'] == 3 || $data['role'] == 4){ // Модератор ?>
			<h2><?PHP echo $data['full_name'] ?>, добро пожаловать в личный кабинет!</h2>
			<div class="main-ordersBar">
				<details class="main-formDetails">
					<summary class="main-formSummary"><h3>Заказы</h3></summary>
					<?PHP
						$sql = "SELECT * FROM orders";
						$res = mysqli_query($connect,$sql);
						while($data = mysqli_fetch_assoc($res)){ ?>
							<form class="main-orderBar" method="POST" action="./engine/profile.php?state=order">
								<p>ID заказа:
									<input 
										class="main-userText"
										id="order_<?PHP echo $data['id'] ?>" 
										name="id" 
										value="<?PHP echo $data['id'] ?>"
									>
								</p>
								<p>ID пользователя
									<input 
										class="main-userText"
										id="user_<?PHP echo $data['id_user'] ?>" 
										name="id_user" 
										value="<?PHP echo $data['id_user'] ?>"
									>
								</p>
								<p>Содержимое заказа
									<input 
										class="main-userText"
										id="content_<?PHP echo $data['content'] ?>" 
										name="content" 
										value="<?PHP echo $data['content'] ?>"
									>
								</p>
								<p>Статус заказа
									<input 
										class="main-userText"
										id="statusOrder_<?PHP echo $data['status_order'] ?>" 
										name="status_order" 
										value="<?PHP echo $data['status_order'] ?>"
									>
								</p>
								<p>Дата заказа
									<input 
										class="main-userText"
										id="dateOrder_<?PHP echo $data['date_order'] ?>" 
										name="date_order" 
										value="<?PHP echo $data['date_order'] ?>"
									>
								</p>
								<p>Сумма заказа
									<input 
										class="main-userText"
										id="TotalSum_<?PHP echo $data['TotalSum'] ?>" 
										name="TotalSum" 
										value="<?PHP echo $data['TotalSum'] ?>"
									>
								</p>
								<input class="main-formSumbit" type="submit" name="submit">
							</form>
						<?PHP }
					?>
				</details>
			</div>
			<div class="main-usersBar">
				<details class="main-formDetails">
					<summary class="main-formSummary"><h3>Таблица пользователей</h3></summary>
					<?PHP 
						$sql = "SELECT * FROM users";
						$res = mysqli_query($connect,$sql);
						if($res){ 
							while($data = mysqli_fetch_assoc($res)){ ?>
								<form class="main-userBar" method="POST" action="./engine/profile.php?state=account">
									<p>ID пользователя: 
										<input 
											class="main-userText"
											id="user_<?PHP echo $data['id_user'] ?>" 
											name="user" 
											value="<?PHP echo $data['id_user'] ?>"
										>
									</p>
									<p>Логин пользователя: 
										<input 
											class="main-userText" 
											id="login_<?PHP echo $data['id_user'] ?>" 
											name="login" 
											value="<?PHP echo $data['login'] ?>">
									</p>
									<p>Роль пользователя: 
										<input 
											class="main-userText" 
											id="role_<?PHP echo $data['id_user'] ?>" 
											name="role" 
											value="<?PHP echo $data['role'] ?>">
									</p>
									<p>ФИО пользователя: 
										<input 
											class="main-userText" 
											id="fullName_<?PHP echo $data['id_user'] ?>" 
											name="full_name" 
											value="<?PHP echo $data['full_name'] ?>">
									</p>
									<p>Телефон пользователя: 
										<input 
											class="main-userText" 
											id="phoneNumber_<?PHP echo $data['id_user'] ?>" 
											name="phone_number" 
											value="<?PHP echo $data['phone_number'] ?>">
									</p>
									<p>Адрес пользователя: 
										<input 
											class="main-userText" 
											id="adress_<?PHP echo $data['id_user'] ?>" 
											name="adress" 
											value="<?PHP echo $data['adress'] ?>">
									</p>
									<input class="main-formSumbit" type="submit" name="submit">
								</form>
							<?PHP }
						}
					?>
				</details>				
			</div>
			<div class="main-goodsBar">
				<details class="main-formDetails">
					<summary class="main-formSummary"><h3>Таблица товаров</h3></summary>
					<?PHP 
					$sql = "SELECT * FROM goods";
					$res = mysqli_query($connect,$sql);
					while($data = mysqli_fetch_assoc($res)){ ?>
						<form class="main-goodBar" method="POST" action="./engine/profile.php?state=good">
							<p>ID товара: 
								<input 
									class="main-userText" 
									id="good_<?PHP echo $data['id'] ?>" 
									name="good_id" 
									value="<?PHP echo $data['id'] ?>"
								>
							</p>
							<p>Наименование товара: 
								<input 
									class="main-userText" 
									id="good_<?PHP echo $data['id'] ?>" 
									name="good_title" 
									value="<?PHP echo $data['title'] ?>"
								>
							</p>
							<p>Информация товара: 
								<input 
									class="main-userText" 
									id="good_<?PHP echo $data['id'] ?>" 
									name="good_info" 
									value="<?PHP echo $data['info'] ?>"
								>
							</p>
							<p>Цена товара: 
								<input 
									class="main-userText" 
									id="good_<?PHP echo $data['id'] ?>" 
									name="good_price" 
									value="<?PHP echo $data['price'] ?>"
								>
							</p>
							<p>Картинка товара: 
								<input 
									class="main-userText" 
									id="good_<?PHP echo $data['id'] ?>" 
									name="good_img" 
									value="<?PHP echo $data['img'] ?>"
								>
							</p>
							<p>Дата создания: 
								<input 
									class="main-userText" 
									id="good_<?PHP echo $data['id'] ?>" 
									name="good_date_create" 
									value="<?PHP echo $data['date_create'] ?>"
								>
							</p>
							<input class="main-formSubmit" type="submit" name="submit">
						</form>
					<?PHP }
				?>
				</details>			
			</div>
		<?PHP }
		
		if($data['role'] == 4){ // Администратор ?>
			<h2><?PHP echo $data['full_name'] ?>, добро пожаловать в личный кабинет!</h2>
		<?PHP }
	}
?>