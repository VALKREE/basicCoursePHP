<?PHP
	include "./config.php";
	$sql = "SELECT * FROM goods";
	$res = mysqli_query($connect,$sql);

?>
<div class="main-catalog">
	<h1>Каталог товаров</h1>
	<?PHP
		if(!isset($_SESSION['id_user'])){ ?>
		<p>Товары можно приобрести только авторизованным пользователям!</p>
		<?PHP }

		if(isset($_GET['success'])){
			if($_GET['success'] == 1){ ?>
					<h1>Товар успешно добавлен в корзину!</h1>
			<?PHP }
		}else{ ?>
			<h1>Ошибка при добавлении товара!</h1>
		<?PHP } 
	?>
	<div class="main-goods">
	<?PHP
		while($data = mysqli_fetch_assoc($res)){ ?>
			<div class="main-good">
				<h3 class="main-goodHeading"><?PHP echo $data['title'] ?></h3>
				<img src="./images/catalog/goods/<?PHP echo $data['img'] ?>" alt="<?PHP echo $data['title'] ?>" class="main-goodImage">
				<p class="main-info"><?PHP echo $data['info'] ?></p>
				<p class="main-price"><?PHP echo $data['price'] ?></p>
				<?PHP if(isset($_SESSION['id_user'])){ ?>
					<a href="./engine/goods.php?id=<?PHP echo $data['id'] ?>">Добавить в корзину</a>
				<?PHP } ?>
			</div>
		<?PHP } ?>
	</div>
</div>