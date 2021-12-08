<?PHP
	session_start();
	const SERVER = "localhost";
	const DB = "db_goods";
	const LOGIN = "root";
	const PASSWORD = "";
	$connect = mysqli_connect(SERVER,LOGIN,PASSWORD,DB);
	if ($connect->connect_error) {
		die("Ошибка соединения: " . $connect->connect_error);
	}
	$sql = "SELECT * FROM goods";
	$res = mysqli_query($connect, $sql) or die("Ошибка: ".mysqli_error($connect ));
	while($data = mysqli_fetch_assoc($res)){
?>	
	<div class="main-good flexColumn" id="<?PHP echo $data['id'] ?>">
		<h3 class="main-goodHeading"><?PHP echo $data['title'] ?></h3>
		<img 
			src="./images/catalog/goods/<?PHP echo $data['image'] ?>" 
			alt="<?PHP echo $data['title'] ?>" 
			class="main-goodImage
		">
		<p class="main-goodShortDescription"><?PHP echo $data['shortDescription'] ?></p>
		<p class="main-goodPrice"><?PHP echo $data['price'] ?> &#8381;</p>
		<form class="main-goodAddToCart flexRow" method="post" action="./cart.php">
			<input type="hidden" 
				name="good_id" 
				value="<?PHP echo $data['id'] ?>"
			>
			<input class="main-goodsQuantity" type="text" name="quantity">
			<input class="main-addToCart" type="submit" name="add" value="Добавить в корзину">
		</form>
	</div>
<?PHP	
	}
?>
