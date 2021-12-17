<div class="main_auth">
	<?PHP
		if(isset($_SESSION['id_user'])){ ?>
			<h1>Пользователь авторизован</h1>
			<a href="index.php">Перейти на главную страницу</a>
		<?PHP }else{
			if(isset($_GET['success_auth'])){ ?>
				<h1>Вы успешно авторизовались!</h1>
			<?PHP }
		}
		if(isset($_GET['error_registration'])){
			echo $_GET['error_registration'];
		}
		if(isset($_GET['unexit'])){ ?>
			<h1>Пользователь не существует! Попробуйте снова или зарегистрируйтесь!</h1>
		<?PHP }
	?>
	<h1>Вход в систему</h1>
	<form action="engine/user.php" method="POST">
		<p>Логин</p>
		<input type="text" name="login">
		<p>Пароль</p>
		<input type="password" name="password">

		<input type="submit" name="auth" value="Войти">
	</form>
</div>