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
			<div class="main-goods flexRow">
				<?PHP
					include "./server/catalog.php";
				?>
			</div>
		</main>
		<?PHP include "./components/footer/footer.php"; ?>
	</div>
</body>
</html>