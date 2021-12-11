<?PHP
	$baseMenu = [
		"Главная" => "/",
		"Форма обратной связи" => "?page=form",
		"О компании" => "?page=about",
		"Фотогалерея" => "?page=gallery",
		"Каталог" => "?page=catalog"
	];
	$menuForNotAuthUser = [
		"Регистрация" => "?page=register",
		"Войти" => "?page=auth"
	];
	$menuForAuthUser = [
		"Личный кабинет" => "?page=progile",
		"Выйти" => "?page=exit",
		"Корзина" => "?page=cart"
	];
	if(isset($_SESSION['id_user'])){
		$menu = array_merge($baseMenu, $menuForAuthUser);
	}else{
		$menu = array_merge($baseMenu, $menuForNotAuthUser);
	}
?>
<header class="header center">
	<ul class="header-list">
		<?PHP
			foreach($menu as $title => $link){
		?>
				<li class="header-listElement">
					<a class="header-link" href="<?PHP echo $link ?>">
						<?PHP echo $title ?>							
					</a>
				</li>
		<?PHP
			}
		?>
	</ul>
</header>