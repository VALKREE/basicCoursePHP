<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Задание 4 - товар</title>
</head>
<style>
	.main{
		padding-left: calc(50% - 570px);
		padding-right: calc(50% - 570px);
	}
	.catalog{
		display: flex;
		flex-direction: row;
		flex-wrap: wrap;
		justify-content: flex-start;
		align-items: center;
	}
	.catalog-image{
		max-width: 256px;
		max-height: 256px;
	}
	.catalog-item{
		width: 300px;
		display: flex;
		flex-direction: column;
		justify-content: center;
		align-items: center;
		border: 1px solid #000;
		margin: 1rem;
		padding: 1rem;
	}
	.catalog-title{
		font-size: 24px;
		margin: .1rem;
	}
	.catalog-description{
		font-size: 18px;
		margin:.1rem;
	}
	.catalog-price{
		font-size: 20px;
		margin: .1rem;
	}
</style
<body>
	<header style="height: 32px;display:flex;gap:15px;justify-content: center;align-items: center;">
		<a href="./index.php">Главная</a>
		<a href="./task1.php">Задание 1</a>
		<a href="./task2.php">Задание 2</a>
		<a href="./task3.php">Задание 3</a>
		<a href="./task4.php">Задание 4</a>
	</header>
	<main class="main">
		<div class="catalog">
			<a href="<?= $_SERVER['HTTP_REFERER'] ?>">Назад</a>
		    <div class="catalog-item" id="<?= $_GET['id']?>">
			   	<img class='catalog-image' src="./image/catalog/<?= $_GET['image']?>" alt="<?= $_GET['title']?>">
			   	<h3 class='catalog-title'><?= $_GET['title']?></h3>
			   	<p class='catalog-description'><?= $_GET['description']?></p>
			   	<p class='catalog-price'><?= $_GET['price']?></p>
		    </div>
		</div>
	</main>
</body>
</html>