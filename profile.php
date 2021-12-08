<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Интернет магазин</title>
	<link rel="stylesheet" href="./CSS/style.css">
</head>
<?PHP include "./server/logout.php"; ?>
<body>
	<div class="wrapper">
		<?PHP include "./components/header/header.php"; ?>	
		<main class="main">
			<div class="profile flexColumn">
				<div class="flexColumn authOrRegister">
					<?PHP
						if($_SESSION['id'] == "" || $_SESSION['id'] == 0){
					?>
							<h3 class="authOrRegister-heading">Вы хотите зарегистрироваться или зайти?</h3>
							<a class="authOrRegister-login" href="profile.php?state=login" class="auth" name="login">Войти в профиль</a>
							<a class="authOrRegister-register" href="profile.php?state=register" class="register" name="register">Зарегистрироваться</a>
					<?PHP			
					 		if($_GET['state'] === "login"){
								include "./components/login/page.php";
					?>
							<script>
								document.querySelector('.authOrRegister-login').
									style.display = "none";
								document.querySelector('.authOrRegister-register').
									style.display = "flex";
							</script>
					<?PHP
							}
							if($_GET['state'] === "register"){
								include "./components/register/page.php";
					?>
							<script>
								document.querySelector('.authOrRegister-register').
									style.display = "none";
								document.querySelector('.authOrRegister-login').
									style.display = "flex";
							</script>
					<?PHP
							}
						}else{
							echo "
								<h3 class='profile-heading'>Привет, {$_SESSION['name']}</h3>
								<p class='profile-text'>Ваш логин: {$_SESSION['login']}</p>
							";
						}
					?>
				</div>
			</div>
		</main>
		<?PHP include "./components/footer/footer.php"; ?>
	</div>
</body>
</html>
	