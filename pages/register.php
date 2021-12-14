<div class="main-register">
	<?PHP
		if(isset($_GET['success_registration'])){ ?>
			<h1>Вы успешно зарегисрированы</h1>
		<?PHP } 
		if(isset($_GET['errors_registration'])){ ?>
		<h1><?PHP echo $_GET['errors_registration'] ?></h1>
		<?PHP } 
	?>
	<form action="engine/user.php" method="POST">
		<p>Имя</p>
		<input type="text" name="full_name">
		<p>Телефон</p>
		<input type="text" name="phone_number">
		<p>Логин</p>
		<input type="text" name="login">
		<p>Пароль</p>
		<input type="password" name="password">
		<p>Подтвердите пароль</p>
		<input type="password" name="confirmPassword">
		<p>Адрес</p>
		<textarea name="adress"></textarea>
		<input type="submit" name="registration" value="Зарегистрироваться">
	</form>
</div>