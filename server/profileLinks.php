<?PHP
	if($_SESSION['id'] == "" || $_SESSION['id'] == 0){
?>
	<a href="./profile.php" class="header-link">Профиль</a>
<?PHP
	}else{
?>
	<a href="./profile.php" class="header-link">Профиль</a>
	<a href="?exit" class="header-link exit">Выйти из профиля</a>
<?PHP
	}
?>