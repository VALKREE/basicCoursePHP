<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Задание 4 - каталог</title>
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
	.catalog-shortDescription{
		font-size: 18px;
		margin:.1rem;
	}
	.catalog-price{
		font-size: 20px;
		margin: .1rem;
	}
</style
<body>
	<!--
		4. Создать страницу каталога товаров:
		товары хранятся в БД (структура прилагается);
		страница формируется автоматически;
		по клику на товар открывается карточка товара с подробным описанием.
		подумать, как лучше всего хранить изображения товаров.
	-->
	<header style="height: 32px;display:flex;gap:15px;justify-content: center;align-items: center;">
		<a href="./index.php">Главная</a>
		<a href="./task1.php">Задание 1</a>
		<a href="./task2.php">Задание 2</a>
		<a href="./task3.php">Задание 3</a>
		<a href="./task4.php">Задание 4</a>
	</header>
	<main class="main">
		<div class="catalog">
			<?PHP
				$SERVER = "localhost";
			    $DB = "db_goods";
			    $LOGIN = "root";
			    $PASSWORD = "";
			    $connect = mysqli_connect($SERVER,$LOGIN,$PASSWORD,$DB);
				$sql = "SELECT * FROM goods";
	    		$res = mysqli_query($connect,$sql);
	    		while($data = mysqli_fetch_assoc($res)){
	    			echo "
		    			<a href='./good.php?
		    				id={$data['id']}&image={$data['image']}&title={$data['title']}&description={$data['description']}&price={$data['price']}&
		    			'>
			    			<div class='catalog-item' id='{$data['id']}'>
			    				<img class='catalog-image' src='./image/catalog/{$data['image']}'' alt='{$data['title']}'>
			    				<h3 class='catalog-title'>{$data['title']}</h3>
			    				<p class='catalog-shortDescription'>{$data['shortDescription']}</p>
			    				<p class='catalog-price'>{$data['price']}&#8381;</p>
			    			</div>
			    		</a>
	    			";
	    		}
			?>
		</div>
	</main>
</body>
</html>