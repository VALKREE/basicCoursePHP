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
			<div class="main-cart flexColumn">
				<h3>Корзина логина: <?PHP $_SESSION['login'] ?></h3>
				<div class="main-cartList">
					<table class="main-cartTable flexColumn">
						<tbody class="main-cartTbody flexColumn">
							<tr class="main-cartRow flexRow">
								<th class="main-cartCol flexColumn">ID</th>
								<th class="main-cartCol flexColumn">Наименование</th>
								<th class="main-cartCol flexColumn">Цена</th>
								<th class="main-cartCol flexColumn">Количество</th>
								<th class="main-cartCol flexColumn">Сумма</th>
							</tr>
							<?PHP 
								include "./server/cart.php";
							?>
						</tbody>
					</table>
				</div>
				<div class="main-cartPrice">
					<?PHP
						if($_SESSION['id'] == "" || $_SESSION['id'] == 0){
					?>
							<p>Чтобы оплатить заказ, вам надо авторизоваться! <a href="./profile.php">Профиль</a></p>
					<?PHP
						}else{
					?>
							<form action="payment.php" class="main-payment" method="POST">
								<p>Если заказ верен, чтобы оплатить нужно нажать кнопку!</p>
								<input type="submit" value="Оплатить">
							</form>
					<?PHP		
						}
					?>
				</div>
			</div>
		</main>
		<?PHP include "./components/footer/footer.php"; ?>
	</div>
</body>
</html>